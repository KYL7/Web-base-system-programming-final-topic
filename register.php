<?php 
include("list.php");
?>
<html>
<head>
    <title>註冊會員</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
    <style>
      body{
        background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/login_background.png");
        background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/login_background.png");
        background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/login_background.png");
        background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/login_background.png");
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        padding-top: 0;
      }
    </style>
  </head>
<body class="">
<div class="register-box">
  <div class="register-logo">
      <b><font color="#00DDAA" size="50">註冊會員</font></b>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">註冊一個新的帳號</p>

    <form action="register_finish.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="UserName" name="user">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="passwd">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><font size="5"><b>註冊</b></font></button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="login.php" class="text-center">已經擁有帳號</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
</body>
</html>
