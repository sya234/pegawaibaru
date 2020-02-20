<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Pegawai</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/hover.zoom.js"></script>
    <script src="/assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" class="trigger-btn" data-toggle=""></a></li>
            <li><a href=""></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <img src="/assets/img/user.png" alt="Stanley">
          <h1>Hai!</h1>
          <br>
           
          <br>
          <h3>Tabel Pegawai</h3>
          <table class="table table-striped">
            <thead>
              
                <th>NIK</th>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th colspan="2" align="center">Action</th>
              
            </thead> 

              <tbody>
              @foreach($pegawai as $pegawai)
                <tr>
                  <td>{{ $pegawai->nik }}</td>
                  <td align="left">{{ $pegawai->nama_pegawai }}</td>
                  <td align="left">{{ $pegawai->no_telp }}</td>
                  <td>{{ $pegawai->email }}</td>
                  <td>
                    <a href="#editModal" class="btn btn-primary" data-toggle="modal">Edit</a>
                  </td>
                  <td>
                    <a href="{{ route('pegawai_delete', $pegawai->nik) }}" class="btn btn-primary">Hapus</a>
                  </td>

                </tr>
              @endforeach
            </tbody>
              

          </table>
        
        </div><!-- /col-lg-8 -->
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /ww -->
  
   <div id="editModal" class="modal fade">
        <div class="modal-dialog modal-login">
          <div class="modal-content">
            <div class="modal-header">        
              <h4 class="modal-title">Edit Data Pegawai</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <form action="/home" method="post">
                @csrf 
                @method('PUT')

                <div class="form-group">
                  <i class="fa fa-user"></i>
                  <text>NIK:</text><input type="text" name="nik" class="form-control" placeholder="NIK" value="{{ $pegawai->nik }}" required="required">
                </div>
                <div class="form-group">
                  <i class="fa fa-user"></i>
                  <text>Nama:</text><input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $pegawai->nama_pegawai }}" required="required">
                </div>
                <div class="form-group">
                  <i class="fa fa-user"></i>
                  <text>No Telpon:</text><input type="text" name="no_telp" class="form-control" placeholder="NoTelp" value="{{ $pegawai->no_telp }}" required="required">
                </div>
                <div class="form-group">
                  <i class="fa fa-user"></i>
                  <text>Email:</text><input type="text" name="email" class="form-control" placeholder="Email" value="{{ $pegawai->email }}" required="required">
                </div>
                <div class="form-group">
                  <input type="hidden" name="_method" value="put">
                  <input type="submit"  class="btn btn-primary btn-block btn-lg" value="Edit">
                </div>
              </form>
            </div>
          </div>

    </div>
  </div>
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>
