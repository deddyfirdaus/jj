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
</style>
</head>
<body background="#5D4B3E">
  <div class="container">
    <div class="jumbotron" style="background-color: white;">
      <div class="container text-center">
        <a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=index'?>"><img src="assets/img/printkuy.png"></a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <form action="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=login'?>" method="POST">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-login form-control">Login</button>
        </form>
        <br>
        <div class="text-center">
          <a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=registerPage'?>" style="color: #5D4B3E;">Register</a>
        </div>
      </div>
      <div class="col-lg-4"></div>
    </div>
  </div>
</body>
</html>
