@extends('layoutsAdmin.master')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List Job</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Job</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<!-- /.content-header -->


<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Category</th>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Salary</th>
                  <th>Benefit</th>
                  <th>Min Experience</th>
                  <th>Description</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($job as $data)
                  <tr>
                    <td>{!! $data->id_category !!}</td>
                    <td>{!! $data->name !!}</td>
                    <td>{!! $data->company !!}</td>
                    <td>{!! $data->address !!}</td>
                    <td>{!! $data->contact !!}</td>
                    <td>{!! $data->salary !!}</td>
                    <td>{!! $data->benefit !!}</td>
                    <td>{!! $data->min_experience !!}</td>
                    <td>{!! $data->description !!}</td>
                    <td><img src="{!! '/photos/company_photos/'.$data->photo !!}" style="width:50px;height:50px;" alt="foto"></td>
                    <td>
                      <a href="{{route('job.edit',$data->id)}}"><button class="btn btn-primary" ><i class="fas fa-edit"></i></button></a>
                      <a href="{{ route('job.destroy',$data->id)}}"><button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID Category</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Salary</th>
                    <th>Benefit</th>
                    <th>Min Experience</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection