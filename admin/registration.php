<?php
$a=array();
session_start();

require "config.php";

if(isset($_POST['register'])){
  $name =  mysqli_real_escape_string($conn, $_POST['fname']);
  // $gender =  $_POST['gender'];
  $phone = mysqli_real_escape_string($conn, $_POST['no']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $repassword = mysqli_real_escape_string($conn, $_POST['repassword']);
  // $image = $_POST['image'];

    if($email == NULL){
      $a["email_null"] = true;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $a["email_format"] = true;
    }

    if($name == NULL){
      $a["name_null"] = true;
    }    

    if($phone == NULL){
      $a["phone_null"] = true;
    }
    elseif(!preg_match ("/^[0-9]*$/", $phone)){
      $a["phone_format"] = true;
    }

    if($password == NULL){
    $a["password_null"] = true;
    }
    
    if($repassword == NULL){
      $a["repassword_null"] = true;
    }
    elseif($password != $repassword){
      $a["match"] = true;
    }
    

    if(count($a) == 0){
      $sql="SELECT * FROM doctor_master where email = '$email' && password='$password' ";
      $result = mysqli_query($conn,$sql);

      $rows = mysqli_num_rows($result);
      if ($rows > 0) {
          // $_SESSION["email"]=$email;
          $a["recordExist"] = true;

      } else {
          // header("location:login.php");
          $sqlInsert = "INSERT INTO doctor_master(Full_name,Phone,Email,password)  VALUES ('$name','$phone','$email','$password')";
          $resultInsert = mysqli_query($conn, $sqlInsert);
      
          if($resultInsert == 1){
            $_SESSION["registration"] = true;
            header("location:index.php");
          } else{
            // echo "Something went wrong";
            $a["msg"] = true;
          } 
      }
      
    }
  }
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registration Page</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <b>Register Form</b>
    </div>
    
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="fname" value="<?php if(isset($_POST['register'])){ echo $name; }  ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="mb-2">
            <?php 
              if(array_key_exists("name_null",$a)){
                echo '<span style="color:red">Please enter your name.';
              }
            ?>
          </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Phone" name="no" value="<?php if(isset($_POST['register'])){ echo $phone; }  ?>">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fa fa-phone"></span>
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <span style="color:red"><?php 
                if(array_key_exists("phone_null",$a)){
                  echo 'Please enter your phone number.';
                }
                elseif(array_key_exists("phone_format",$a)){
                  echo "Please enter valid phone number.";
                }
                ?></span>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php if(isset($_POST['register'])){ echo $email; }  ?>" >
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
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?php if(isset($_POST['register'])){ echo $password; }  ?>" >
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
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="repassword" id="re-type-password" value="<?php if(isset($_POST['register'])){ echo $repassword; }  ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="mb-2">
        <?php 
            if(array_key_exists("repassword_null",$a)){
              echo '<span style="color:red">Please enter your repassword.';
            }
            elseif(array_key_exists("match",$a)){
              echo '<span style="color:red">Password and retype password does not match.';
            }
          ?>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"  name="register">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="mb-2">
        <?php 
            if(array_key_exists("msg",$a)){
              echo '<span style="color:red">Please fill all field.';
            }
            if(array_key_exists("recordExist",$a)){
              echo '<span style="color:red">This member is already exist in our system.';
            }
          ?>
        </div>

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
