<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodatasController extends Controller
{
    public function index()
    {
        return view('admin.indexBiodata');
    }

    public function create()
    {
        return view('admin.createBiodata');
    }
}
