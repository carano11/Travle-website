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
<body ng-app="myApp" ng-controller="MyController" background="../../images/nen_login.jpg">
<?php
	include '../../controller/index_qt.php';
?>
	<div class="overlay" style="" ng-show="display">
		<div class="login-wrapper">
			<div class="login-content">
				<a href="index.php" class="close">x</a>
				<h3>Đăng nhập hệ thống</h3>
				<form method="post" action="index.php" >
					<label for="username">
						Tài Khoản
						<input type="text" name="txtUsername" id="username" placeholder="Trên 6 ký tự"  required="required" />
					</label>
					<label for="password">
						Mật khẩu
						<input type="password" name="txtPassword" id="password" placeholder="Mật khẩu phải viết hoa 1 kí tự đầu, có số và chữ"  required="required" />
					</label>
						<?php 
						 ?>
						<input type="submit" class="btn btn-danger" name="dangnhap" value="Đăng nhập" ></input>
					</form>

				</div>
			</div>
		</div>

	
		<script type="text/javascript" src="../../vendor/bootstrap.js"></script>  
		<script type="text/javascript" src="../../vendor/angular-1.5.min.js"></script>  
		<script type="text/javascript" src="../../vendor/angular-animate.min.js"></script>
		<script type="text/javascript" src="../../vendor/angular-aria.min.js"></script>
		<script type="text/javascript" src="../../vendor/angular-messages.min.js"></script>
		<script type="text/javascript" src="../../vendor/angular-material.min.js"></script>  
		<script type="text/javascript" src="../../model/quantri/2.js"></script>
	</body>
	</html>