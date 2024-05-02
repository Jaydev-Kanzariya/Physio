<?php
require "config.php";
if(isset($_POST['submit'])){

    session_start();
        $email = $_POST['email'];
        $newpassword = $_POST['newPassword'];
        $confirmnewpassword = $_POST['confirmPassword'];
        $result = mysqli_query($conn, "SELECT password FROM patient WHERE Email='$email'");
        $res = mysqli_num_rows($result);
        if($res == 1)
        {
                if($newpassword != $confirmnewpassword){
                    echo "Passwords do not match";
                }
                else{
                    $sql=mysqli_query($conn, "UPDATE patient SET password='$newpassword' where Email='$email'");
                // echo "Congratulations You have successfully changed your password";
                header("Location:login-register.php");
            }
        }else{
            echo "your email entered does not exist";
        }
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">

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
								<img class="logo-default" srcset="images/logo.png, images/logo@2x.png 2x" src="images/logo@2x.png" alt="Canvas Logo">
						</div><!-- #logo end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="mx-auto mb-0" id="tab-login-register" style="max-width: 500px;">
						<div class="tab-content">
							<div class="tab-pane  show active" id="tab-login" role="tabpanel" aria-labelledby="canvas-tab-login-tab"
								tabindex="0">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="mb-0" action="" method="post">

											<h3>Forget password</h3>

											<div class="row">
												<div class="col-12 form-group">
													<label for="login-form-username">Email Address:</label>
													<input type="email" id="login-form-username" name="email" value="" class="form-control" required>
												</div>

												<div class="col-12 form-group">
													<label for="login-form-password">Password:</label>
													<input type="password" id="login-form-password" name="newPassword" value="" class="form-control" required>
												</div>

												<div class="col-12 form-group">
													<label for="login-form-password">Retype Password:</label>
													<input type="password" id="login-form-password" name="confirmPassword" value="" class="form-control" required>
												</div>

												<div class="col-12 form-group">
													<div class="d-flex justify-content-between">
														<button class="button button-3d button-black m-0" id="login-form-submit" name="submit">Change Password</button>
														<a href="login-register.php">You have account?</a>
													</div>
												</div>
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
							<i class="bi-envelope"></i> info@canvas.com <span class="middot">&middot;</span> <i class="fa-solid fa-phone"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="bi-skype"></i> CanvasOnSkype
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


