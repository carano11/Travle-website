<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../../model/quantri/style2.css">
<?php 
include '../../model/quantri/show_tour_details_model.php';
?>
<?php 
include '../../controller/show_tour_details.php';
?>

<body>
	<?php 
			include("../../view/quantri/navbar.php");
		?>
	<form method="post">
	<table id="abc" align="center" border="1px black solid">
		<tr align="center">
			<td colspan="2">CHI TIẾT TOURS</td>
		</tr>
		<tr>
			<td>Tên tour</td>
			<?php 

				foreach ($tours as $tour) 
				{
			?>
			<td><input type="text" name="txttentour1" size='42' value="<?php echo $tour['NAME']?>"></td>
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
			<td><input type="number" name="txtsonguoi1" size='42' value="<?php echo $tour['MAX_PEOPLE']?>" min="1" max="20"></td>
		</tr>
		<tr>
			<td>Tên file ảnh</td>
			<td><input type="file" name="txtfileanh1" size='42'  value="<?php echo $tour['IMAGE']?>"></td>
		</tr>	
		</tr>
		<tr>
			<td>Ngày bắt đầu</td>
			<td><input type="text" name="txtngaybd" size='42' value="<?php echo $tour['START']?>"></td>
		</tr>
		<tr>
			<td>Ngày kết thúc</td>
			<td><input type="text" name="txtngaykt" size='42' value="<?php echo $tour['END']?>"></td>
		</tr>
		<tr>
			<td>Tên khách sạn</td>
			<td><input type="text" name="txtks" size='42' value="<?php echo $tour['HOTEL_NAME']?>"></td>
		</tr>
		<tr>
			<td>Phương tiện di chuyển</td>
			<td><input type="text" name="txtptien" size='42' value="<?php echo $tour['VEHICLE']?>"></td>
		</tr>
		<tr>
			<td>Giá trẻ em</td>
			<td><input type="text" name="txtgiatreem" size='42' value="<?php echo $tour['CHILD_PRICE']?>"></td>
		</tr>
		<tr>
			<td>Giá người lớn</td>
			<td><input type="text" name="txtgianguoilon" size='42' value="<?php echo $tour['ADULT_PRICE']?>"></td>
		</tr>
		<tr>
			<td>Chương trình tour</td>
			<td><input type="text" name="txtchuongtrinhtour" size='42' value="<?php echo $tour['TOUR_PROGRAM']?>"></td>
		</tr>
		<tr>
			<td>Xem trước ảnh</td>
			<td> <img src="../../images/<?php echo $tour['IMAGE'] ?>" width=300px height=150px></td>
		</tr>
		<tr align="center">
			<td colspan="2">
				<button id="button1"><a href="admin.php?quanly=list_qltourdl">Quay về danh sách tour</a></button>
				<input type="submit" name='btnsua'value='Chỉnh sửa' id="button1">
			</td>
		</tr>
		<?php } ?>
	</table>
</form>
</body>
</html>