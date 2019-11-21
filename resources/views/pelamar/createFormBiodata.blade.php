<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GoDamel | Form User Biodata</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form User Biodata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Form User Biodata</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Please enter Your Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('biodatauser.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{ $id_user }}" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                  </div>
                  <div class="text-danger">{!!$errors->first('address')!!}</div>
                  <div class="form-group">
                        <label for="contact_no">Contact</label>
                        <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder="Contact">
                  </div>
                  <div class="text-danger">{!!$errors->first('contact_no')!!}</div>
                  <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                  </div>
                  <div class="text-danger">{!!$errors->first('gender')!!}</div>
                  <div class="form-group">
                        <label for="education">Last Education</label>
                        <input type="text" class="form-control" id="education" name="education" placeholder="Last Education">
                  </div>
                  <div class="text-danger">{!!$errors->first('education')!!}</div>
                  <div class="form-group">
                        <label for="nationality">Nationality</label>
                        <select class="form-control" name="nationality" id="nationality">
                            <option value="Indonesia">Indonesia</option>
                            <option value="Inggris">Inggris</option>
                            <option value="India">India</option>
                            <option value="Italia">Italia</option>
                        </select>
                  </div>
                  <div class="text-danger">{!!$errors->first('nationality')!!}</div>
                  <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="photo" name="photo">
                        <label class="custom-file-label" for="photo">Choose Photos</label>
                      </div>
                    </div>
                  </div>
                  <div class="text-danger">{!!$errors->first('photo')!!}</div>
                  <div class="form-group">
                    <label for="cv">Curriculum Vitae/ CV</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" id="cv" name="cv">
                            <label class="custom-file-label" for="cv">Choose Photos</label>
                          </div>
                        </div>
                    </div>
                    <div class="text-danger">{!!$errors->first('cv')!!}</div>
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

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                  
                </div>
                
              </footer>
            
              <!-- Control Sidebar -->
              <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
              </aside>
              <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->
            
            <!-- jQuery -->
            <script src="../../plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../../dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../../dist/js/demo.js"></script>
            </body>
            </html>