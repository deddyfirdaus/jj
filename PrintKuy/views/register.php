<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PrintKuy</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .btn-login { 
    color: #ffffff; 
    background-color: #5D4B3E; 
    border-color: #5D4B3E; 
  } 

  .btn-login:hover, 
  .btn-login:focus, 
  .btn-login:active, 
  .btn-login.active, 
  .open .dropdown-toggle.btn-login { 
    color: #ffffff; 
    background-color: #4F3522; 
    border-color: #5D4B3E; 
  } 

  .btn-login:active, 
  .btn-login.active, 
  .open .dropdown-toggle.btn-login { 
    background-image: none; 
  } 

  .btn-login.disabled, 
  .btn-login[disabled], 
  fieldset[disabled] .btn-login, 
  .btn-login.disabled:hover, 
  .btn-login[disabled]:hover, 
  fieldset[disabled] .btn-login:hover, 
  .btn-login.disabled:focus, 
  .btn-login[disabled]:focus, 
  fieldset[disabled] .btn-login:focus, 
  .btn-login.disabled:active, 
  .btn-login[disabled]:active, 
  fieldset[disabled] .btn-login:active, 
  .btn-login.disabled.active, 
  .btn-login[disabled].active, 
  fieldset[disabled] .btn-login.active { 
    background-color: #5D4B3E; 
    border-color: #5D4B3E; 
  } 

  .btn-login .badge { 
    color: #5D4B3E; 
    background-color: #ffffff; 
  }

  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #5D4B3E;
  }

  a{
    color: #5D4B3E;
  }

  a:focus, a:hover{
    color: #5D4B3E;
  }

  .nav>li>a:focus, .nav>li>a:hover{
    background-color: #5D4B3E;
    color: #fff;
  }
</style>
</head>
<body background="#5D4B3E">
  <div class="container">
    <div class="jumbotron" style="background-color: white;">
      <div class="container text-center">
        <img src="assets/img/printkuy.png">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <ul class="nav nav-pills" style="margin-left: 50px;">
          <li class="nav-item text-center col-lg-5">
            <a class="nav-link active" style="border:1px solid; border-color:#5D4B3E;" data-toggle="pill" href="#pengeprint">Pengeprint</a>
          </li>
          <li class="nav-item text-center col-lg-5">
            <a class="nav-link" style="border:1px solid; border-color:#5D4B3E;" data-toggle="pill" href="#tempat">Tempat</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane container active col-lg-12" id="pengeprint">
            <br>
            <form action="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=registerPengeprint'?>" method="POST">
              <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="nohp">Nomor Handphone:</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
              </div>
              <div class="form-group">
                <label for="jeniskelamin">Jenis Kelamin:</label>
                <select class="form-control" name="jeniskelamin">
                  <option>Laki - Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" class="btn btn-login form-control">Register</button>
            </form>
          </div>
          <div class="tab-pane container fade col-lg-12" id="tempat">
            <br>
            <form action="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=registerTempat'?>" method="POST">
              <div class="form-group">
                <label for="nama">Nama Tempat:</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" name="alamat" style="resize: none;" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label for="nohp">Nomor Handphone:</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
              </div>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" class="btn btn-login form-control">Register</button>
            </form>
          </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    <br>
    <br>
    <br>
  </body>
  </html>
