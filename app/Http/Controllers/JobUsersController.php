<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Biodata;
use App\Job_application;
use Sentinel;

class JobUsersController extends Controller
{
    public function index()
    {
        $job = Job::paginate(5);
        return view('pelamar.indexJobUser')->with('job',$job);
    }

    public function show($id)
    {
        $job = Job::find($id);
        return view('pelamar.showJobUser')->with('job', $job);
    }

    public function store($id)
    {
        $user = Sentinel::getUser();
        $biodata = Biodata::where('id_user',$user->id)->first();
        $modelJobApplication = new Job_application();
        $modelJobApplication->id_job = $id;
        $modelJobApplication->id_biodata = $biodata->id;
        $modelJobApplication->status = 'waiting';
        $modelJobApplication->save();
        return redirect()->route('jobuser.index');
    }
}
