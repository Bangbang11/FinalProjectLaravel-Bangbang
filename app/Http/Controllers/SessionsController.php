<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\Http\Requests\SessionRequest;

class SessionsController extends Controller
{
    public function login()
    {
        if ($user = Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin') {
            Session::flash('notice','Anda Sudah Login ');
            return redirect()->route('homeAdmin');
        } elseif ($user = Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'pelamar') {
            Session::flash('notice','Anda Sudah Login ');
            return redirect()->route('home');
        } else {
            return view('sessions.login');
        }
    }

    public function login_store(SessionRequest $request)
    {
        if ($user = Sentinel::authenticate($request->all())) {
            Session::flash('notice','Selamat Datang '.$user->first_name.' '.$user->last_name);
            if (Sentinel::getUser()->roles()->first()->slug == 'admin') {
                return redirect()->route('homeAdmin');
            }
            return redirect()->route('home');
        } else {
            Session::flash('error','Login gagal');
            return view('sessions.login');
        }
    }

    public function logout()
    {
        Sentinel::logout();
        Session::flash('notice','Logout Berhasil');
        return redirect('/login');
    }
}
