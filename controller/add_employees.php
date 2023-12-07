<?php 
		include("../../model/quantri/connection.php");
	 	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		if(isset($_POST['btnok']))
		{
			if(!is_numeric($_POST['txtcmndnv']))
			{?>
				  <script> alert("chứng minh nhân dân phải là chuỗi số !"); </script>
			<?php
			}
			else{
				if(!is_numeric($_POST['txtsdtnv']))
					{
						?>
						  <script> alert("số điện thoại phải là chuỗi số !"); </script>
					<?php
					}
				else{
			if(isset($_POST["txttennv"]))
			{
				$ten=$_POST["txttennv"];
			}

			if(isset($_POST['txtcmndnv']))
			{
				$cmnd=$_POST['txtcmndnv'];
			}

			if(isset($_POST['txtdcnv']))
			{
				$dchi=$_POST['txtdcnv'];
			}

			if(isset($_POST['txtsdtnv']))
			{
				$sdt=$_POST['txtsdtnv'];
			}

			if(isset($_POST['chucvu']))
			{
				$chucvu=$_POST['chucvu'];
			}

			if(isset($_POST['ngayvl']))
			{
				$nvl=$_POST['ngayvl'];
			}

			if(isset($_POST['ns']))
			{
				$ns=$_POST['ns'];
			}

			$sql="INSERT INTO `employees`(`NAME`, `IDCARD`, `ADDRESS`, `PHONENUMBER`, `POSITION`, `PART_DAY`, `BIRTHDAY`) 
				  VALUES ('$ten','$cmnd','$dchi','$sdt','$chucvu','$nvl','$ns')";
			$connect->query($sql);
	 		
			?>
				<script> alert("Thêm nhân viên thành công !"); </script>
			<?php
			}
			}	
		}
	?>