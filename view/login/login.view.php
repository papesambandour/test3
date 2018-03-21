<!DOCTYPE html>
<html lang="en">
<head>
	<title>Group Tchalla - Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="/public/img/favicon.ico" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/view/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/view/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/view/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/view/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/view/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/view/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/view/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/view/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/view/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/view/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/view/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Tchalla Group
				</span>
				<form method="post" action="/auth/logcheck" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input id="inputEmail" value="" name="matLogin"  class="input100" type="text" name="username" placeholder="Matricule">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="inputPassword" value="" name="passwordLogin" class="input100" type="password" name="pass" placeholder="Mot de passe">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Connexion
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/view/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/view/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/view/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/view/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/view/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/view/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="/view/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/view/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/view/login/js/main.js"></script>

</body>
</html>