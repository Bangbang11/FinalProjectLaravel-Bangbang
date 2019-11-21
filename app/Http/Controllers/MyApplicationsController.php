<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyApplicationsController extends Controller
{
    public function index()
    {
        return view('pelamar.indexMyApplication');
    }
}
