<?php
include("../../model/quantri/connection.php");
	if(isset($_POST['btnthemcttour']))
	{
		if(isset($_POST['txtngaybd']))
		{
			$bd=$_POST['txtngaybd'];
		}
		if(isset($_POST['txtngaykt']))
		{
			$kt=$_POST['txtngaykt'];
		}
		if(isset($_POST['txtks']))
		{
			$ks=$_POST['txtks'];
		}
		if(isset($_POST['txtptien']))
		{
			$pt=$_POST['txtptien'];
		}
		if(isset($_POST['txtgiatreem']))
		{
			$treem=$_POST['txtgiatreem'];
		}
		if(isset($_POST['txtgianguoilon']))
		{
			$nglon=$_POST['txtgianguoilon'];
		}
		if(isset($_POST['txtchuongtrinhtour']))
		{
			$cttour=$_POST['txtchuongtrinhtour'];
		}

		$selectOption = $_POST["select_matour"];//lấy dữ liệu từ select
		 $sql="INSERT INTO `tour_details`(`ID`, `START`, `END`, `HOTEL_NAME`, `VEHICLE`, `CHILD_PRICE`, `ADULT_PRICE`, `TOUR_PROGRAM`)
			 VALUES ('$selectOption','$bd','$kt','$ks','$pt','$treem','$nglon','$cttour')";
		  $connect->query($sql);
		?>
	<script> alert("Thêm chi tiết tour thành công !"); </script>
	<?php
	}
?>