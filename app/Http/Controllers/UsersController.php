<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\Http\Requests\UserRequest;
use App\Biodata;
use DB;

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
        // Sentinel::registerAndActivate($request->all());
        // Session::flash('notice','Success Register New User');
        DB::beginTransaction();
        try {
            $role = Sentinel::findRoleBySlug('pelamar'); //cari role user
            $role_id = $role->id;
            $user = Sentinel::registerAndActivate($request->all());
            $user->roles()->attach($role_id);
            $id_user = $user->id;
            $tgl_lahir = $request->date_of_birth;
            $biodataBaru = new Biodata();
            $biodataBaru->id_user = $id_user;
            $biodataBaru->date_of_birth = $tgl_lahir;
            $biodataBaru->save();
            Session::flash('notice','Success create new user');
            DB::commit(); //simpan DB
        } catch (\Throwable $errors) {
            DB::rollBack(); //rollback jika ada error pas insert ke db
            Session::flash('error', $errors);
        }
        return redirect()->route('login');
    }
}
