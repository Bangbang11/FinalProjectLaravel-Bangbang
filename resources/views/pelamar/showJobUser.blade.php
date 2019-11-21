@extends('layoutsUser.master')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{ '/photos/company_photos/'.$job->photo}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="#">Search Jobs <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $job->company}}</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-about d-md-flex">
      <div class="one-half ftco-animate" >
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4"><span>{{ $job->name }}</span></h2>
        </div>
        <div>
            <h3>Job Description</h3>
            <p>{{ $job->description}}</p>
        </div>
      </div>
      <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <p class="mb-4"><span class="fas fa-map-marker-alt"> {{ $job->address}}</span></p>
        </div>
        <div>
            <h3>Company Highlight</h3>
            <div class="row">
                <div class="col-md-6">
                    <p>Industry <br> {{ $job->id_category}}</p>
                    <p>Salary <br> {{ $job->salary}}</p>
                    <p>Benefit <br> {{ $job->benefit}}</p>
                </div>
                <div class="col-md-6">
                        <p>Company Name <br> {{ $job->company}}</p>
                        <p>Contact <br> {{ $job->contact}}</p>
                        <p>Experience <br> {{ $job->min_experience}}</p>
                </div>
            </div>
        </div>
      </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <a href="{{route('jobuser.store',$job->id)}}"><button class="btn btn-success form-control bg-success">Apply</button></a>
        </div>
      </div>
      
    </div>
  </section>
@endsection