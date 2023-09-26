<?php
require("../assets/database/sql.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="../assets/logo.png"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
	
 </style>
</head>
<body >
	
	
	 
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-55">
						Admin Login
					</span>
	 				<form method="post">
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
					<div id="loginstatus">  </div>
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="lPassword" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					
					
					<div class="container-login100-form-btn p-t-25">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					</form>

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Lawyer?
						</span>

						<a class="txt1 bo1 hov1" href="Lawyer_signup.php">
							Sign up 							
						</a>
						<br>
						<span class="txt1">
							 User?
						</span>

						<a class="txt1 bo1 hov1" href="signup.php">
						 Sign up 							
						</a> &nbsp;
						<a class="txt1 bo1 hov1" href="login.php">
						 Login							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
   
     if(isset($_POST['email'])&&isset($_POST['lPassword']))
     {
         $email = secure($_POST['email']);
         $password = secure($_POST['lPassword']);
 
         $sql = "SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'";
         $result = $mysqli->query($sql);
         if($row = $result->fetch_assoc())
         {
			$_SESSION['email'] = $row['email'];
             header("location:Lawyer_signup.php");
			
          
         }
         else {
			  echo'<script>
			  document.getElementById("loginstatus").innerHTML = "Logn Failed";
			  </script>';
         }
     }
	 ?>
</body>
</html>