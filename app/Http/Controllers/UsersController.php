<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function signup()
    {
        return view('users.signup');
    }

    public function signup_store(UserRequest $request)
    {
        //below code will register user and automatic activate account user
        //Sentienl::registerAndActivate($request true);
        // or
        Sentinel::registerAndActivate($request->all());
        Session::flash('notice','Success Register New User');
        return redirect()->back();
    }
}
