<?php
if(isset($_POST['chinhsua']))
		{
			if(!is_numeric($_POST['txtcmndnv']))
			{?>
				  <script> alert("chứng minh nhân dân phải là chuỗi số !"); </script>
			<?php
			}
			else{
				if(!is_numeric($_POST['txtsdtnv']))
					{?>
						  <script> alert("số điện thoại phải là chuỗi số !"); </script>
					<?php
					}
				else{
				$ten=$_POST['txttennv'];
				$cmnd=$_POST['txtcmndnv'];
				$dchi=$_POST['txtdcnv'];
				$sdt=$_POST['txtsdtnv'];
				$nvl=$_POST['nvl'];
				$ns=$_POST['ns'];

				$sql="UPDATE employees Set NAME='$ten', IDCARD='$cmnd', ADDRESS='$dchi', PHONENUMBER='$sdt', PART_DAY='$nvl', BIRTHDAY='$ns' where ID='$manv'";
				$connect->query($sql);
				?>
					 <script> alert("Chỉnh sửa thành công !"); </script>
				<?php
				}
			}			
		}
?>