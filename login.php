<?php
  // Include db config
  require_once 'db.php';

  // Init vars
  $email = $password = '';
  $email_err = $password_err = '';

  // Process form when post submit
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Sanitize POST
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Put post vars in regular vars
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate email
    if(empty($email)){
      $email_err = 'Please enter email';
    }

    // Validate password
    if(empty($password)){
      $password_err = 'Please enter password';
    }

    // Make sure errors are empty
    if(empty($email_err) && empty($password_err)){
      // Prepare query
      $sql = 'SELECT name, email, password FROM users WHERE email = :email';

      // Prepare statement
      if($stmt = $pdo->prepare($sql)){
        // Bind params
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        // Attempt execute
        if($stmt->execute()){
          // Check if email exists
          if($stmt->rowCount() === 1){
            if($row = $stmt->fetch()){
              $hashed_password = $row['password'];
              if(password_verify($password, $hashed_password)){
                // SUCCESSFUL LOGIN
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['name'];
                header('location: index1.php');
              } else {
                // Display wrong password message
                $password_err = 'The password you entered is not valid';
              }
            }
          } else {
            $email_err = 'No account found for that email';
          }
        } else {
          die('Something went wrong');
        }
      }
      // Close statement
      unset($stmt);
    }

    // Close connection
    unset($pdo);
  }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>เข้าสู่ระบบ</title>
		<meta name="description" content="Elmer is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Elmer Admin, Elmeradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						
						<!-- <span class="brand-text">Elmer</span> -->
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					
					<a class="inline-block btn btn-primary  btn-rounded btn-outline" href="singup.php">สมัครสมาชิก</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="page-wrapper pa-0 ma-0 auth-page">
						<div class="container-fluid">
							<!-- Row -->
							<div class="table-struct full-width full-height">
								<div class="table-cell vertical-align-middle auth-form-wrap">
									<div class="auth-form  ml-auto mr-auto no-float">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="mb-30">
													<h3 class="text-center txt-dark mb-10">ลงชื่อเข้าสู้ระบบ</h3>
													
												</div>	
												<div class="form-wrap">
												<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_2">อีเมล</label>
															<input  class="form-control" required="" name="email" type="text" id="txtUsername" placeholder="อีเมล"class="form-control form-control-lg <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
															<span class="invalid-feedback"><?php echo $email_err; ?></span>
														</div>
														<div class="form-group">
															<label class="pull-left control-label mb-10" for="exampleInputpwd_2">รหัสผ่าน</label>
															<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">ลืมหรัสผ่าน</a>
															<div class="clearfix"></div>
														
															<input  type="password" name="password" id="txtPassword" class="form-control" required="" placeholder="รหัสผ่าน"  class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
															<span class="invalid-feedback"><?php echo $password_err; ?></span>
														</div>
														
														
														<div class="form-group text-center">
															<button type="submit" class="btn btn-primary  btn-rounded" value="Login">เข้าสู้ระบบ</button>
														</div>
														<!-- <div class="col">
              				  <a href="register.php" class="btn btn-light btn-block">No account? Register</a>
              						</div> -->
													</form>
													
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->	
		
		
						</div>
						
					</div>
					<!-- /Row -->	

				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>
