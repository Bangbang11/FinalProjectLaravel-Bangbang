<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job_application;
use PDF;
use Event;
use App\Events\ApproveEvent;
use App\Events\RejectEvent;

class JobApplicationsController extends Controller
{
    public function index()
    {
        $status = 'waiting';
        $job_application = Job_application::with('biodata')->with('job')->where('status',$status)->paginate(5);
        return view('admin.indexJobApplication')->with('job_apply', $job_application);
    }

    public function approve()
    {
        $status = 'approve';
        $job_application = Job_application::with('biodata')->with('job')->where('status',$status)->paginate(5);
        return view('admin.approveJobApplication')->with('job_apply',$job_application);
    }

    public function approve_store($id)
    {
        $job = Job_application::with('biodata')->find($id);
        $job->status = 'approve';
        $job->save();
        Event::fire(new ApproveEvent($job));
        return redirect()->route('jobapplication.approve');
    }

    public function reject()
    {
        $status = 'reject';
        $job_application = Job_application::with('biodata')->with('job')->where('status',$status)->paginate(5);
        return view('admin.rejectJobApplication')->with('job_apply',$job_application);
    }

    public function reject_store($id)
    {
        $job = Job_application::with('biodata')->find($id);
        $job->status = 'reject';
        $job->save();
        Event::fire(new RejectEvent($job));
        return redirect()->route('jobapplication.reject');
    }

    public function show($id)
    {
        $job_application = Job_application::with('biodata')->with('job')->find($id);
        return view('admin.showJobApplication')->with('job_apply',$job_application);
    }

    public function cv($id)
    {
        $job = Job_application::with('biodata')->find($id);
        $pdf = PDF::loadview('admin.cv',['cv'=>$job]);
        return $pdf->stream();
    }
}
