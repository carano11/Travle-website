<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="../../vendor/bootstrap.css">
	<link rel="stylesheet" href="../../vendor/angular-material.min.css">
	<link rel="stylesheet" href="../../vendor/font-awesome.css">
	<link rel="stylesheet" href="../../model/quantri/2.css">
</head>
<?php 
include '../../controller/change_password.php';

	?>
	
<body ng-app="myApp" ng-controller="MyController" background="images/nen_login.jpg">
		<div class="overlay" style="" ng-show="display">
		<div class="login-wrapper">
			<div class="login-content">
				<a href="index.php" class="close">x</a>
				<h3>Đổi mật khẩu</h3>
				<form method="post" action="change_password.php" >
					<label for="username">
						Password cũ
						<input type="password" name="txtoldpass" id="password" placeholder="Mật khẩu phải viết hoa 1 kí tự đầu, có số và chữ"  required="required" />
					</label>
					<label for="password">
						Password mới
						<input type="password" name="txtnewpass" id="password" placeholder="Mật khẩu phải viết hoa 1 kí tự đầu, có số và chữ"  required="required" />
					</label>
					<label for="password">
						Confirm Password 
						<input type="password" name="txtconfirmpass" id="password" placeholder="Mật khẩu phải viết hoa 1 kí tự đầu, có số và chữ"  required="required" />
					</label>
				
						<input type="submit" class="btn btn-danger" name="hoantat" value="Hoàn tất"></input>	
					</form>

				</div>
			</div>
		</div>
		<script type="text/javascript" src="vendor/bootstrap.js"></script>  
		<script type="text/javascript" src="vendor/angular-1.5.min.js"></script>  
		<script type="text/javascript" src="vendor/angular-animate.min.js"></script>
		<script type="text/javascript" src="vendor/angular-aria.min.js"></script>
		<script type="text/javascript" src="vendor/angular-messages.min.js"></script>
		<script type="text/javascript" src="vendor/angular-material.min.js"></script>  
		<script type="text/javascript" src="2.js"></script>
	</body>
	</html>