<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\ReminderRequest;
use Session, Event;
use Sentinel, Reminder;
use App\Events\ReminderEvent;

class ReminderController extends Controller
{
    public function create()
    {
        if ($user = Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin') {
            Session::flash('notice','Anda Sudah Login ');
            return redirect()->route('homeAdmin');
        } elseif ($user = Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'pelamar') {
            Session::flash('notice','Anda Sudah Login ');
            return redirect()->route('home');
        } else {
            return view('reminders.create');
        }
    }

    public function store(Request $request)
    {
        $getUser = User::where('email', $request->email)->first();

        if ($getUser) {
            $user = Sentinel::findById($getUser->id);
            ($reminder = Reminder::exists($user)) || ($reminder = Reminder::create($user));
            Event::fire(new ReminderEvent($user, $reminder));
            Session::flash('notice','Check your email for instruction');
        } else {
            Session::flash('error','Email not valid');
        }
        return view('reminders.create');
    }

    public function edit($id, $code)
    {
        $user = Sentinel::findById($id);
        if (Reminder::exists($user, $code)) {
            return view('reminders.edit',['id'=>$id, 'code'=>$code]);
        } else {
            redirect('/');
        }
    }

    public function update(ReminderRequest $request, $id, $code)
    {
        $user = Sentinel::findById($id);
        $reminder = Reminder::exists($user, $code);

        if ($reminder) {
            Session::flash('notice','Your Password Success modified');
            Reminder::complete($user, $code, $request->password);
            return redirect('login');
        } else {
            Session::flash('error','Passwords must match');
        }
    }
}
