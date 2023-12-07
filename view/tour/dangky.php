<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Đăng ký tài khoản  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="../../vendor/bootstrap.css">
	<link rel="stylesheet" href="../../vendor/angular-material.min.css">
	<link rel="stylesheet" href="../../vendor/font-awesome.css">
	<link rel="stylesheet" href="../../model/quantri/2.css">
</head>
<body ng-app="myApp" ng-controller="MyController" background="../../images/xinh.jpg">
<?php
	include '../../model/tour/model_dangky.php';
?>
	<div class="overlay" style="" ng-show="display">
		<div class="login-wrapper">
			<div class="login-content">
				<a href="dangky.php" class="close">x</a>
				<h3>Đăng ký</h3>
				<form method="post" action="dangky.php" >
					<label for="username">
						Username
						<input type="text" name="txttentk" placeholder="Over 6 characters"  />
					</label>
					<label for="password">
						Password
						<input type="password" name="txtmatkhau" placeholder="Password must be capitalized first character with numbers and letters" />
                    </label>
                    <label for="gender">
						Gender
						<input type="radio" name="txtgioitinh" value="Nam" placeholder="Enter your gender..." />Nam
						<input type="radio" name="txtgioitinh" value="Nu" placeholder="Enter your gender..." />Nu
                    </label>
                    <label for="sdt">
						SĐT
						<input type="text" name="txtsodt" placeholder="Enter phone number..."/>
					</label>
					<label for="email">
						Email
						<input type="email" name="txtemail" placeholder="Enter Email..."/>
					</label>
						<?php 
						 ?>
						<input type="submit" class="btn btn-info" name="btndangki" id ="dangky" value="Đăng Ký" ></input>
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