<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel, Session;

class WelcomesController extends Controller
{
    public function index() {
        if ($user = Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin') {
            Session::flash('notice','Anda Sudah Login ');
            return redirect()->route('homeAdmin');
        } elseif ($user = Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'pelamar') {
            Session::flash('notice','Anda Sudah Login ');
            return redirect()->route('home');
        } else {
            return view('welcome');
        }
    }
}
