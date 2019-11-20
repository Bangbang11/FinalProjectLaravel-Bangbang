@extends('layoutsAdmin.master')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Input Job Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Input Job Category</li>
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
            <h3 class="card-title">Please Input Job Category</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{route('category.store')}}" method="post" >
              {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label for="name">Job Category Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Job Category Name">
                <div class="text-danger">{!!$errors->first('name')!!}</div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="SAVE">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection