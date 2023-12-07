<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../../model/quantri/style2.css">
<?php 
	include '../../controller/add_tour_details.php';
	?>
<body>
	<?php 
			include("../../view/quantri/navbar.php");
		?>
	<form action="add_tour_details.php" method="POST">
	<table id="abc">
		<tr align="center">
			<td colspan="2"><h2 style="color: #EF161A">CHI TIẾT TOUR</h2></td>
			
		</tr>
		<tr>
			<td>Chọn Mã tour</td>
			<td>
				<select name="select_matour">
				<?php
					$matours=$connect->query("SELECT * FROM tours");
				foreach ($matours as $ma) 
				{
					echo"<option value='".$ma['ID']."'>".$ma['NAME'].' - '.$ma['ID']."</option>";
				}	

				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Ngày bắt đầu</td>
			<td><input type="date" name="txtngaybd" required="required"></td>
		</tr>
		<tr>
			<td>Ngày kết thúc</td>
			<td><input type="date" name="txtngaykt" required="required"></td>
		</tr>
		<tr>
			<td>Tên khách sạn</td>
			<td><input type="text" name="txtks" required="required"></td>
		</tr>
		<tr>
			<td>Phương tiện di chuyển</td>
			<td><input type="text" name="txtptien" required="required"></td>
		</tr>
		<tr>
			<td>Giá trẻ em</td>
			<td><input type="number" min="0" name="txtgiatreem" required="required">VNĐ</td>
		</tr>
		<tr>
			<td>Giá người lớn</td>
			<td><input type="number" min="0" name="txtgianguoilon" required="required">VNĐ</td>
		</tr>
		<tr>
			<td>Chương trình tour</td>
			<td><input type="text" name="txtchuongtrinhtour" required="required"></td>
		</tr>
			<tr align="center">
			<td colspan="2"><input id="button1" type="submit" name="btnthemcttour" value="Thêm">
			</td>

		</tr>
	</table>
	</form>
</body>
</html>