<?php
require "config.php";
if(isset($_POST['submit'])){

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$qry = "insert into patient (name,gender,email,phone,password) values('$name','$gender' , '$email' ,'$phone' , '$password')";
$res = mysqli_query($conn, $qry);
if($res){
	header("location:physio-home.html?msg=registraion successfully");
}else{
	echo "failed" .mysqli_error($conn);
}
}

if(isset($_POST['login'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password =mysqli_real_escape_string($conn, $_POST['password']);

	$sql="SELECT * FROM patient where email = '$email' && password='$password' ";
	$result = mysqli_query($conn,$sql);
	
	$rows = mysqli_num_rows($result);
	if ($rows == 1) {
		// $_SESSION["email"]=$email;
		header("Location: physio-home.html");
	} else {
		echo "<h6>Invalid User ID/Password</h6>";
		// include 'login-register.php';
	}
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="description"
        content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="css/font-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title
	============================================= -->
    <title>Physiotheraphy-Harivanadana college</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper">

        <!-- Header
		============================================= -->
        <header id="header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <img class="logo-default" srcset="images/logo.png, images/logo@2x.png 2x"
                                src="images/logo@2x.png" alt="Canvas Logo">
                            <img class="logo-dark" srcset="images/logo-dark.png, images/logo-dark@2x.png 2x"
                                src="images/logo-dark@2x.png" alt="Canvas Logo">
                        </div><!-- #logo end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <section id="content">
            <div class="content-wrap">
                <div class="container">

                    <div class="mx-auto mb-0" id="tab-login-register" style="max-width: 500px;">

                        <ul class="nav canvas-alt-tabs2 tabs nav-pills justify-content-center mb-3" id="canvas-tab-nav2"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab-register-tab" data-bs-toggle="pill"
                                    data-bs-target="#tab-register" type="button" role="tab" aria-controls="tab-register"
                                    aria-selected="true">Register</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-login-tab" data-bs-toggle="pill"
                                    data-bs-target="#tab-login" type="button" role="tab" aria-controls="tab-login"
                                    aria-selected="false">Login</button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane" id="tab-login" role="tabpanel" aria-labelledby="canvas-tab-login-tab"
                                tabindex="0">
                                <div class="card mb-0">
                                    <div class="card-body" style="padding: 40px;">
                                        <form id="login-form" name="login-form" class="mb-0" action="" method="post">

                                            <h3>Login to your Account</h3>

                                            <div class="row">
                                                <div class="col-12 form-group">
                                                    <label for="login-form-username">Email Address:</label>
                                                    <input type="text" id="login-form-username" name="email" value=""
                                                        class="form-control" required>
                                                </div>

                                                <div class="col-12 form-group">
                                                    <label for="login-form-password">Password:</label>
                                                    <input type="password" id="login-form-password" name="password"
                                                        value="" class="form-control" required>
                                                </div>

                                                <div class="col-12 form-group">
                                                    <div class="d-flex justify-content-between">
                                                        <button class="button button-3d button-black m-0"
                                                            id="login-form-submit" name="login"
                                                            value="login">Login</button>
                                                        <a href="forget-password.php">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane show active" id="tab-register" role="tabpanel"
                                aria-labelledby="canvas-tab-register-tab" tabindex="0">
                                <div class="card mb-0">
                                    <div class="card-body" style="padding: 40px;">
                                        <h3>Register</h3>

                                        <form id="register-form" name="register-form" class="row mb-0" action=""
                                            method="post">

                                            <div class="col-12 form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" id="name" name="name" class="form-control" required>
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="gender">Gender: &nbsp;</label>
                                                <input type="radio" name="gender" value="Male" checked> Male &nbsp;
                                                <input type="radio" name="gender" value="Female"> Female
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="register-form-email">Email Address:</label>
                                                <input type="text" id="register-form-email" name="email"
                                                    class="form-control" required>
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="register-form-phone">Phone:</label>
                                                <input type="text" id="register-form-phone" name="phone"
                                                    class="form-control" required>
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="register-form-password">Choose Password:</label>
                                                <input type="password" id="register-form-password" name="password"
                                                    class="form-control" required>
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="register-form-repassword">Re-enter Password:</label>
                                                <input type="password" id="register-form-repassword" name="repassword"
                                                    class="form-control" required>
                                            </div>

                                            <div class="col-12 form-group">
                                                <button class="button button-3d button-black m-0" id="register"
                                                    name="submit" value="register">Register Now</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section><!-- #content end -->

        <div id="copyrights">
            <div class="container">

                <div class="row col-mb-30">

                    <div class="col-md-6 text-center text-md-start">
                        Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>

                    <div class="col-md-6 text-center text-md-end">
                        <i class="bi-envelope"></i> info@canvas.com <span class="middot">&middot;</span> <i
                            class="fa-solid fa-phone"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i
                            class="bi-skype"></i> CanvasOnSkype
                    </div>

                </div>

            </div>
        </div><!-- #copyrights end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="js/plugins.min.js"></script>
    <script src="js/functions.bundle.js"></script>

</body>

</html>