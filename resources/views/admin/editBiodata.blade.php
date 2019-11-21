@extends('layoutsAdmin.master')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit User Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Please Edit User Data</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{route('biodata.update',$user->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}" placeholder="First Name">
                <div class="text-danger">{!!$errors->first('first_name')!!}</div>
              </div>
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}" placeholder="Last Name">
                <div class="text-danger">{!!$errors->first('last_name')!!}</div>
              </div>
              <div class="form-group">
                <label for="date_of_birth">Date Of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $date->date_of_birth }}" placeholder="Date Of Birth">
                <div class="text-danger">{!!$errors->first('date_of_birth')!!}</div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Email">
                <div class="text-danger">{!!$errors->first('email')!!}</div>
              </div>
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="UPDATE" >
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection