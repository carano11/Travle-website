<!DOCTYPE html>
<html>
<head>
	<title>Star Tour | Chuyến đi tiên cảnh</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="../../vendor/bootstrap.css">
	<link rel="stylesheet" href="../../vendor/angular-material.min.css">
	<link rel="stylesheet" href="../../vendor/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../../css/1.css">
	<link rel="stylesheet" type="text/css" href="../../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../../css/component.css" />
	<link rel="stylesheet" type="text/css" href="../../css/dangkytour.css" />
	<script src="../../js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

 <?php include '../../model/tour/dangkitour.php'; ?>                           
<body >
	<form name="dangki" action="dangkitour.php" method="post" >
		<div class="container menu">	
			<div class="main">
				<nav id="ttw-hrmenu" class="ttw-hrmenu">
					<ul>
					<li>
						<a href="#">Trang Chủ</a>
						<div class="ttw-hrsub">
							<div class="ttw-hrsub-inner">
								<h4 style="text-align: center;"><a href="../../view/tour/index.php" target="blank">Trang chủ</a></h4>
							</div>
						</div><!-- /ttw-hrsub -->					
					</li>
							
					
					<li>
						<a href="#">Blog</a>
						<div class="ttw-hrsub">
							<div class="ttw-hrsub-inner"> 
								<div>
									<h4>Tin tức &amp; Điểm đến hot</h4>
									<ul>
										<li><a href="#">Điểm đến cho ngày hè nóng nực</a></li>
										<li><a href="#">Leo núi ban đêm. Tại sao không?</a></li>
										<li><a href="#">Check in nhanh các địa điểm này!</a></li>
									</ul>
								</div>
								<div>
									<h4>Review</h4>
									<ul>
										<li><a href="#">Các khách sạn có view đẹp nhất Vũng Tàu!</a></li>
										<li><a href="#">Ăn gì mặc gì khi đi Đà Lạt</a></li>
									</ul>
								</div><!-- /ttw-hrsub-inner -->
							</div><!-- /ttw-hrsub -->
						</li>
						<li>
								<a href="#">Liên hệ</a>
								<div class="ttw-hrsub">
									<div class="ttw-hrsub-inner">
										<h4 style="text-align: center;"><a href="contact-us.php" target="blank">Liên hệ</a></h4>
									</div>
								</div><!-- /ttw-hrsub -->
							</li>
							<li>
								<a href="#">Quản lý</a>
								<div class="ttw-hrsub">
									<div class="ttw-hrsub-inner">
										<h4 style="text-align: center;"><a href="../../view/quantri/index.php" target="blank">Đăng nhập</a></h4>
									</div>
								</div><!-- /ttw-hrsub -->
							</li>
						</ul>
				</nav>
				</div>
			</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="../../js/ttwHorizontalMenu.min.js"></script>
			<script>
				$(function() {
					ttwHorizontalMenu.init();
				});
			</script>
			<br><br>

			<div class="container img" align="center">
				<img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.15752-9/103268293_575964620015002_2296907058995533067_n.jpg?_nc_cat=111&_nc_sid=b96e70&_nc_ohc=9otPYzzWbIMAX9m7EpF&_nc_ht=scontent.fhan3-1.fna&oh=3a391e2f67c5ff488b6eb3dbc202d26f&oe=5F02198B" alt="" width="720px">
			</div>
			<br>

			<div class="container dangkitour">
			<div>
				<div id="khung">THÔNG TIN LIÊN LẠC</div>
				<div id="khung_dienthongtin">
					<table id="thongtinll" align="center" width="1100px" cellpadding="15px" cellspacing="15px">
						<tr>
							<td width="10%"></td>
							<td height="60px">Tên khách hàng:</td>
							<td height="60px"><input type="text" name="txttenkh" size="70px" required="required"></td>
						</tr>
						<tr>
							<td width="10%"></td>
							<td height="60px">Chứng minh nhân dân:</td>
							<td height="60px"><input type="text" name="txtcmnd" size="70px" required="required"></td>
						</tr>
						<tr>
							<td width="10%"></td>
							<td height="60px">Địa chỉ:</td>
							<td height="60px"><input type="text" name="txtdiachi" size="70px" required="required"></td>
						</tr>
						<tr>
							<td width="10%"></td>
							<td height="60px">Số điện thoại:</td>
							<td height="60px"><input type="tel" name="txtsdt" size="70px" required="required"></td>
						</tr>
						<tr>
							<td width="10%"></td>
							<td height="60px">Ngày sinh:</td>
							<td height="60px"><input type="date" name="txtns" size="70px" required="required"></td>
						</tr>
						<tr>
							<td width="10%"></td>
							<td height="60px">Email:</td>
							<td height="60px"><input type="email" name="txtemail" size="70px" required="required"></td>
						</tr>
						<tr><td width="10%"></td>
							<td height="60px" width="110px">Số người lớn</td>
							<td height="60px" width="110px"><input type="number" name="txtslnguoilon" min="1" max="20" value="1"></td>
							<!-- <td><input type="submit" name="btnthemdk" value="Thêm khung đăng kí"></td> -->
						</tr><td width="10%"></td>
							<td height="60px">Số trẻ em</td>
							<td height="60px" width="110px"><input type="number" name="txtsltreem" min="0" value="0"></td>

					</table>
					<br>	
					
					<p align="center"><input onclick="alert('Vui lòng qua bước tiếp theo')" class="btn btn-info" type="submit" name="btndattour" value="Xác Nhận Thông Tin" size="20px"></p>
					
					<p align="center">
					<button class="btn btn-info" ><a href="cart.php?test='true'">Bước Trước</a></button>
					<button class="btn btn-info"><a href="success.php?test='true'">Bước Tiếp Theo</a></button></p>
					
					</<br>
										
				</div>		
			</div>
			</div>
		</form>

		<script type="text/javascript" src="../../vendor/bootstrap.js"></script>  
		<script type="text/javascript" src="../../vendor/angular-1.5.min.js"></script>  
		<script type="text/javascript" src="../../vendor/angular-animate.min.js"></script>
		<script type="text/javascript" src="../../vendor/angular-aria.min.js"></script>
		<script type="text/javascript" src="../../vendor/angular-messages.min.js"></script>
		<script type="text/javascript" src="../../vendor/angular-material.min.js"></script>  
		<script type="text/javascript" src="../../js/1.js"></script>
	</body>
	</html>