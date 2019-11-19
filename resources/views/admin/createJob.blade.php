@extends('layoutsAdmin.master')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Input New Job</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Input New Job</li>
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
            <h3 class="card-title">Please Input New Job</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
            <div class="card-body">
              <div class="form-group">
                <label for="name">Job Category Name</label>
                <select class="form-control" name="id_category">
                  <option value="">IT</option>
                  <option value="">Industry</option>
                </select>
              </div>
              <div class="form-group">
                <label for="name">Job Name</label>
                <input type="text" class="form-control" id="name" placeholder="Job Name">
              </div>
              <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" class="form-control" id="company" placeholder="Company Name">
              </div>
              <div class="form-group">
                <label for="name">Company Address</label>
                <input type="text" class="form-control" id="address" placeholder="Company Address">
              </div>
              <div class="form-group">
                <label for="name">Company Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="Company Contact">
              </div>
              <div class="form-group">
                <label for="name">Salary</label>
                <input type="text" class="form-control" id="salary" placeholder="Salary">
              </div>
              <div class="form-group">
                <label for="name">Benefit</label>
                <input type="text" class="form-control" id="benefit" placeholder="Benefit">
              </div>
              <div class="form-group">
                <label for="name">Minimal Experience Required</label>
                <input type="text" class="form-control" id="min_experience" placeholder="Minimal Experience Required">
              </div>
              <div class="form-group">
                <label for="name">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Description">
              </div>
              <div class="form-group">
                <label for="name">Company Photos</label>
                <input type="text" class="form-control" id="photo" placeholder="Company Photos">
              </div>
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection