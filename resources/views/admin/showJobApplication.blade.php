@extends('layoutsAdmin.master')
@section('content')
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ '/photos/user_photos/'.$job_apply->biodata->photo }}" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ $job_apply->biodata->user->first_name}} {{ $job_apply->biodata->user->last_name}}</h3>
                        
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <h4><b>Biodata</b></h4>
                            </li>
                            <li class="list-group-item">
                                <b>Name</b> <a class="float-right">{{ $job_apply->biodata->user->first_name}} {{ $job_apply->biodata->user->last_name}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Date Of Birth</b> <a class="float-right">{{ $job_apply->biodata->date_of_birth}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="float-right">{{ $job_apply->biodata->gender}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right">{{ $job_apply->biodata->user->email}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Contact</b> <a class="float-right">{{ $job_apply->biodata->contact_no}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right">{{ $job_apply->biodata->user->email}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="float-right">{{ $job_apply->biodata->address}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Education</b> <a class="float-right">{{ $job_apply->biodata->education}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nationality</b> <a class="float-right">{{ $job_apply->biodata->nationality}}</a>
                            </li>
                            <li class="list-group-item">
                                <h4><b></b></h4>
                            </li>
                            <li class="list-group-item">
                                <h4><b>Job Proposed</b></h4>
                            </li>
                            <li class="list-group-item">
                                <b>Name</b> <a class="float-right">{{ $job_apply->job->name}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Category</b> <a class="float-right">{{ $job_apply->job->category->name}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Company Name</b> <a class="float-right">{{ $job_apply->job->company}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Company Location</b> <a class="float-right">{{ $job_apply->job->address}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Company Contact</b> <a class="float-right">{{ $job_apply->job->contact}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Experience Required</b> <a class="float-right">{{ $job_apply->job->min_experience}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Salary</b> <a class="float-right">{{ $job_apply->job->salary}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Benefit</b> <a class="float-right">{{ $job_apply->job->benefit}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Curriculum Vitae</b>
                                <a class="float-right" href="{{'/pdf/cv/'.$job_apply->job->cv}}" target="_blank" >
                                    <button class="btn btn-warning">Check CV</button>
                                </a>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{route('approve.store',$job_apply->id)}}" class="btn btn-primary btn-block"><b>Approve</b></a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('reject.store',$job_apply->id)}}" class="btn btn-danger btn-block"><b>Reject</b></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection