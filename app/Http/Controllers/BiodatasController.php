<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use App\Http\Requests\UserRequest;
use App\Http\Requests\BiodataRequest;
use DB;
use App\Biodata;
use App\User;

use Illuminate\Http\Request;

class BiodatasController extends Controller
{
    public function index()
    {
        $user = User::whereHas('role_user', function ($query) {
            $query->where('role_id', 2);
        })->get();
       
        return view('admin.indexBiodata',compact('user'));
    }

    public function create()
    {
        return view('admin.createBiodata');
    }

    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $role = Sentinel::findRoleBySlug('pelamar'); //cari role user
            $role_id = $role->id;
            // $credentials = [
            //     'first_name' => $request->input('first_name'),
            //     'last_name' => $request->input('last_name'),
            //     'email' => $request->input('email'),
            //     'password' => $request->input('password'),
            // ];
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
        return redirect()->route('biodata.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $date = Biodata::where('id_user', $id)->first();
        return view('admin.editBiodata')->with('user', $user)->with('date', $date);
    }

    public function update(BiodataRequest $request, $id)
    {
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();
        $date = Biodata::where('id_user', $id)->first();
        $date->date_of_birth = $request->date_of_birth;
        $date->save();
        return redirect()->route('biodata.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        Biodata::where('id_user',$id)->delete();
        return redirect()->route('biodata.index');
    }
}
