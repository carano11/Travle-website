<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="stylesheet" type="text/css" href="../../model/quantri/style2.css">
	<link rel="stylesheet" href="../../vendor/bootstrap.css">
	<link rel="stylesheet" href="../../vendor/angular-material.min.css">
	<link rel="stylesheet" href="../../vendor/font-awesome.css">
	<link rel="stylesheet" href="../../model/quantri/2.css"> 	
<body>
	<?php 
        include '../../controller/add_employees.php';
	?>
	<form method="post">
	<table align="center" border="1px black solid" id="abc">
		<tr align="center">
			<td colspan="2"><h3 style="color: red">THÊM NHÂN VIÊN</h3></td>
		</tr>
		<tr>
			<td>Tên nhân viên</td>
			<td><input type="text" name="txttennv" required="required"></td>
		</tr>
		<tr>
			<td>CMND</td>
			<td><input type="text" name="txtcmndnv" required="required"></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td><input type="text" name="txtdcnv" required="required"></td>
		</tr>
		<tr>
			<td>Điện thoại</td>
			<td><input type="tel" name="txtsdtnv" required="required" ></td>
		</tr>
		<tr>
			<td>Chức vụ</td>
			<td>
				<input type="radio" name="chucvu" value="Manager">Quản Lý
				<input type="radio" name="chucvu" value="Employee" checked="checked">Nhân Viên
			</td>
		</tr>
		<tr>
			<td>Ngày làm việc</td>
			<td><input type="date" name="ngayvl" required="required"></td>
		</tr>
		<tr>
			<td>Ngày sinh</td>
			<td><input type="date" name="ns" required="required"></td>
		</tr>
		<tr align="center">

			<td colspan="2">
				<button class="btn btn-info"><a href="admin.php?quanly=list_employees" style="text-decoration:none" >Trở về</a></button>
				<input type="submit" name="btnok" value="Thêm" class="btn btn-info">
				
			</td>
		</tr>

	</table>
	</form>
</body>
</html>