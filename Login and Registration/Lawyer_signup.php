<?php require("../assets/database/sql.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lawyer Signup Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="image/png" href="../assets/logo.png"/>

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-55">
					Lawyer Signup
					</span>
					<!-- //First Name -->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "First Name is required">
						<input class="input100" type="text" name="firstname" placeholder="First Name">
						<span class="focus-input100"></span>
						
					</div>
					<!-- //Last Name -->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Last Name is required">
						<input class="input100" type="text" name="lastname" placeholder="Last Name">
						<span class="focus-input100"></span>
						
					</div>
					<!-- //gender -->
					<div class="wrap-input100 validate-input m-b-16">
						<select class="input100"name="gender">
						<option value="select gender" class="input100" disabled="disabled" selected="true">Select Gender</option>
						<option value="male" class="input100">Male</option>
						<option value="female" class="input100">Female</option>
						<option value="Other" class="input100">Other</option>
						</select>
						<span class="focus-input100"></span>
						
					</div>
					<!-- //Phone no -->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "">
						<input class="input100" type="number" name="phoneno" placeholder="Phone no">
						<span class="focus-input100"></span>
						
					</div>
                    <!-- //Degree  -->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "">
						<input class="input100" type="text" name="Degree" placeholder="Degree">
						<span class="focus-input100"></span>
						
					</div>
					<!-- //Email -->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email"placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">						
						<span id="err"></span>			
						</span>
					</div>

					<!-- //Password -->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="lPassword" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Member?
						</span>

						<a class="txt1 bo1 hov1" href="Lawyer_login.php">
							Login						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <?php
 
    if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['gender'])&&isset($_POST['phoneno'])&&isset($_POST['email'])&&isset($_POST['lPassword'])&&isset($_POST['Degree']))
    {
    
        $firstname = secure($_POST['firstname']);
        $lastname = secure($_POST['lastname']);
		$gender = secure($_POST['gender']);
		$phoneno = secure($_POST['phoneno']);
		$email = secure($_POST['email']);
		$password = secure($_POST['lPassword']);
        $Degree = secure($_POST['Degree']);
        

        $sql = "INSERT INTO `lawyer_user`(`firstname`,`lastname`,`gender`,`phoneno`,`Degree`,`email`, `password`) VALUES ('$firstname','$lastname','$gender','$phoneno','$Degree','$email','$password')";
		$mysqli->query($sql);
		header("location:lawyer_login.php");
	
    }

    ?>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>

$("#email").keyup(function(){
	$.ajax({
		type: "post",
		data: {
			email: $("#email").val()
		},
		url: "checkUnique1.php",
		success: function(result) {
			if(result=="exists") { $("#err").html("This data already exists"); } 
			else { $("#err").html("Unique"); }
		}
	})
});

</script>
</html>