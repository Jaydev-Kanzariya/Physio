<?php
  $a=array();
  session_start();

  require "config.php";
  if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password =mysqli_real_escape_string($conn, $_POST['password']);
    // $rememberme =mysqli_real_escape_string($conn, $_POST['rememberme']);

    if($email == NULL){
      $a["email_null"] = true;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $a["email_format"] = true;
    }

    if($password == NULL){
      $a["password_null"] = true;
    }
    
    // if($rememberme){
    //   $a["Remember_me"] = true;
    // }

    if(count($a) == 0){
      $sql="SELECT * FROM doctor_master where email = '$email' && password='$password' ";
      $result = mysqli_query($conn,$sql);

      $rows = mysqli_num_rows($result);
      if ($rows == 1) {
          // $_SESSION["email"]=$email;
          $_SESSION["login"] = true;
          header("Location: index.php");

      } else {
          // header("location:login.php");
          $a["msg"] = true;
      }
    }    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Login Form</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Your Account</p>

      <form method="post" action="">
        <div class="input-group mb-2">
          <input type="email" class="form-control" placeholder="Email" name="email" value ="<?php if(isset($_POST['login'])){ echo $email; }  ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
          <div class="mb-2">
            <span style="color:red"><?php 
            if(array_key_exists("email_null",$a)){
              echo 'Please enter your email.';
            }
            elseif(array_key_exists("email_format",$a)){
              echo "Please enter valid email.";
            }
            ?></span>
          </div>
        <div class="input-group mb-2">
          <input type="password" class="form-control" placeholder="Password" name="password" value="<?php if(isset($_POST['login'])){ echo $password; }  ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="mb-2">
        <?php 
            if(array_key_exists("password_null",$a)){
              echo '<span style="color:red">Please enter your password.';
            }
          ?>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="rememberme" >
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="mb-2">
        <?php 
            if(array_key_exists("msg",$a)){
              echo '<span style="color:red">Please enter valid Id/Password.';
            }
          ?>
        </div>
      <p class="mb-1">
        <a href="recover-password.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="registration.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
