<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use Sentinel;

class HomesController extends Controller
{
    public function index()
    {  

        $user = Sentinel::getUser();
        $id=$user->id;
        $biodata = Biodata::where('id_user', $id)->first();
        if ($biodata->cv == null) {
            return view('pelamar.createFormBiodata')->with('id_user',$id);
        } else {
            
            return view('pelamar.index',compact('id_user'));    
        }
    }
}
