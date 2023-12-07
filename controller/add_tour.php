<?php
include("../../model/quantri/connection.php");
	
	 	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		if(isset($_POST['btnok']))
		{
			if(isset($_POST["txttentour"]))
			{
			$ten=$_POST["txttentour"];
			}
			if(isset($_POST['txtsonguoi']))
			{
			$songuoi=$_POST['txtsonguoi'];
			}
			if(isset($_POST['txtfileanh']))
			{
			$fileanh=$_POST['txtfileanh'];
			}
			$loai=$_POST['loaitour'];

			$sql="INSERT INTO `tours`(`NAME`,`KIND_TOUR`, `MAX_PEOPLE`, `IMAGE`) 
					VALUES ('$ten','$loai','$songuoi','$fileanh')";
			$connect->query($sql);
			?>	
			<script> alert("Thêm tour thành công !"); </script>
	<?php
		}
?>