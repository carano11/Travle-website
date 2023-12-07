<?php
include("../../model/quantri/connection.php");
	
	 	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		if(isset($_POST['btndangki']))
		{
			if(isset($_POST["txttentk"]))
			{
			$ten=$_POST["txttentk"];
			}
			if(isset($_POST['txtmatkhau']))
			{
			$matkhau=$_POST['txtmatkhau'];
			}
			if(isset($_POST['txtgioitinh']))
			{
			$gioitinh=$_POST['txtgioitinh'];
			}
			if(isset($_POST['txtsodt']))
			{
			$sdt = $_POST['txtsodt'];
			}
			if(isset($_POST['txtemail']))
			{
			$email = $_POST['txtemail'];
			}

			$sql="INSERT INTO `dangky`(`ID`, `PASSWORD`, `GENDER`, `SDT`,`email`) 
					VALUES ('$ten','$matkhau','$gioitinh','$sdt','$email')";
			$connect->query($sql);
			?>	
			<script> alert("Thành công !"); </script>
	<?php
		}
?>