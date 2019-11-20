@extends('layoutsAdmin.master')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Job</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Job</li>
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
          <form role="form" action="{{route('job.update',$job->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label for="id_category">Job Category Name</label>
                <select class="form-control" name="id_category" id="id_category">
                  <option value="{!! $namecategory->id !!}" selected>{!! $namecategory->name !!}</option>
                  @foreach ($category as $data)
                      <option value="{!! $data->id !!}">{!! $data->name !!}</option>
                  @endforeach
                </select>
                <div class="text-danger">{!!$errors->first('id_category')!!}</div>
              </div>
              <div class="form-group">
                <label for="name">Job Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{!! $job->name !!}" placeholder="Job Name">
                <div class="text-danger">{!!$errors->first('name')!!}</div>
              </div>
              <div class="form-group">
                <label for="company">Company Name</label>
                <input type="text" class="form-control" id="company" name="company" value="{!! $job->company !!}" placeholder="Company Name">
                <div class="text-danger">{!!$errors->first('company')!!}</div>
              </div>
              <div class="form-group">
                <label for="address">Company Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{!! $job->address !!}" placeholder="Company Address">
                <div class="text-danger">{!!$errors->first('address')!!}</div>
              </div>
              <div class="form-group">
                <label for="contact">Company Contact</label>
                <input type="number" class="form-control" id="contact" name="contact" value="{!! $job->contact !!}" placeholder="Company Contact">
                <div class="text-danger">{!!$errors->first('contact')!!}</div>
              </div>
              <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" class="form-control" id="salary" name="salary" value="{!! $job->salary !!}" placeholder="Salary">
                <div class="text-danger">{!!$errors->first('salary')!!}</div>
              </div>
              <div class="form-group">
                <label for="benefit">Benefit</label>
                <input type="text" class="form-control" id="benefit" name="benefit" value="{!! $job->benefit !!}" placeholder="Benefit">
                <div class="text-danger">{!!$errors->first('benefit')!!}</div>
              </div>
              <div class="form-group">
                <label for="min_experience">Minimal Experience Required</label>
                <input type="text" class="form-control" id="min_experience" name="min_experience" value="{!! $job->min_experience !!}" placeholder="Minimal Experience Required">
                <div class="text-danger">{!!$errors->first('min_experience')!!}</div>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description">{!! $job->description !!}</textarea>
                <div class="text-danger">{!!$errors->first('description')!!}</div>
              </div>
              <div class="form-group">
                <label for="photo">Company Photos</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Company Photos">
                <div class="text-danger">{!!$errors->first('photo')!!}</div>
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