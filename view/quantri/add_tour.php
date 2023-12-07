<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../../model/quantri/style2.css">
<?php 
include '../../controller/add_tour.php';
	?>
<body>
	<?php 
			include("../../view/quantri/navbar.php");
		?>
	<FORM action='add_tour.php' method='post'>
	<table id="abc">
		<tr align="center">
			<td colspan="2">THÊM TOURS</td>
		</tr>
		<tr>
			<td>Tên tour</td>
			<td><input type="text" name="txttentour" required="required"></td>
		</tr>
		<tr>
			<td>Loại tour</td>
			<td>
				<select name="loaitour">
					<option value='Đà Nẵng'>Đà Nẵng</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Số người tối đa</td>
			<td><input type="number" name="txtsonguoi" value="20" min="1" max="20" ></td>
		</tr>
		<tr>
			<td>Tên file ảnh</td>
			<td><input type="file" name="txtfileanh" required="required"></td>
		</tr>	
		<tr align="center">

			<td colspan="2">
				<button  id="button1"><a href="add_tour_details.php">Thêm chi tiết</a></button>
				<input id="button1" type="submit" name="btnok" value="Thêm">

			</td>
		</tr>

	</table>
	<?php
	?>
	</FORM>
</body>
</html>