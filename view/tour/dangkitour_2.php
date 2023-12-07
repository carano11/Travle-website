<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<?php include '../../model/tour/dangkitour_2.php'; ?>

<body>
	<form name="dangki" method="post">
	<div id="banner">
		<?php 
			print_r($_SESSION);
			
		?>
	</div>
	<div id="navbar">
			<ul>
            	<li><a href="#">Trang chủ</a></li>
                <li><a href="#">Tour đà nẵng</a></li>
            </ul>
	</div>
	</div>
	<div id="main_dangkitour">
		<div id="khung">THÔNG TIN LIÊN LẠC</div>
		<div id="khung_dienthongtin">
			<table>				
				<tr>
					
					<td>Tên khách hàng</td>
					<td><input type="text" name="txttenkh" size="70px" required="required"></td>
				</tr>
				<tr>
					<td>Chứng minh nhân dân</td>
					<td><input type="text" name="txtcmnd" size="70px" required="required"></td>
				</tr>
				<tr>
					<td>Địa chỉ:</td>
					<td><input type="text" name="txtdiachi" size="70px" required="required"></td>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td><input type="tel" name="txtsdt" size="70px" required="required"></td>
				</tr>
				<tr>
					<td>Ngày sinh:</td>
					<td><input type="date" name="txtns" size="70px"required="required"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="txtemail" size="70px" required="required"></td>
				</tr>
		
				<tr>
					<td>Số người lớn</td>
					<td><input type="number" name="txtslnguoilon" min="1" max="20" value="1"></td>
				</tr>
				<tr>
					<td>Số trẻ em</td>
					<td><input type="number" name="txtsltreem" min="0" max="10" value="0"></td>
				</tr>
			</table>		

			<?php
//				if(isset($_POST['btndattour']) || isset($_POST['truoc']))
//				{
//					foreach($_SESSION as $khoa=>$value)
//					{
//
//						if(substr($khoa,0,5)=='chon_')
//						{
//							unset($_SESSION[$khoa]);						
//						}
//					}
//					header("location:dangkitour.php");
//				}			
				?>
<!--			Nút Tiếp Theo-->	
<!--			Nút Bước Trước-->
<!--			<p align="center"><a href="cart.php"><input type="submit" name="truoc" value="Bước Trước" size="20px"></a></p>-->
			
			<p align="center"><a href="cart.php"><input type="submit" name="btndattour" value="Bước Trước" size="20px"></a></p>
			
		</div>		
	</div>
	</form>
</body>
</html>