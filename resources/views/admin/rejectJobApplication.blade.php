@extends('layoutsAdmin.master')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Reject Job Applications</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reject Job Applications</li>
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
              <h3 class="card-title">Reject Job Applications Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Last Education</th>
                    <th>Job Proposed</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($job_apply as $data)
                  <tr>
                    <td>{{ $data->biodata->user->first_name}} {{ $data->biodata->user->last_name}}</td>
                    <td>{{ $data->biodata->gender}}</td>
                    <td>{{ $data->biodata->education}}</td>
                    <td>{{ $data->job->name}}</td>
                    <td>
                      <a href="#"><button class="btn btn-primary" ><i class="fas fa-edit"></i></button></a>
                      {{--  <a href="{{route('biodata.destroy',$data->id)}}"><button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a>  --}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Last Education</th>
                    <th>Job Proposed</th>
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