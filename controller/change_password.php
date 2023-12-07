<?php
session_start();
		if (isset($_SESSION['username']) && $_SESSION['username'])
		{
			$id=$_SESSION['username'];
		}
		include("../../model/quantri/connection.php");
	 	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		if(isset($_POST['hoantat']))
		{
			$info='Đổi mặt khẩu thành công';
			$flag=1;
			if(isset($_POST["txtoldpass"]))
			{
				$old_pass=$_POST["txtoldpass"];
			}

			if(isset($_POST['txtnewpass']))
			{
				$new_pass=$_POST['txtnewpass'];
			}

			if(isset($_POST['txtconfirmpass']))
			{
				$confirm_pass=$_POST['txtconfirmpass'];
			}

			$sql="select*FROM `login` where ID='$id'";
			$vara=$connect->query($sql);

			foreach($vara as $a)
			{
				$pass_csdl=$a['PASSWORD'];
			}

			if($old_pass != $pass_csdl)
			{
				$info= "Mật khẩu hiện tại không đúng";
				$flag = 0;
			}
			
			if($new_pass != $confirm_pass)
			{
				$info="Xác nhận mật khẩu không khớp với mật khẩu mới !!!";
				$flag=0;
			}
			if($flag==1)
			{
				$sql1="UPDATE `login` SET `PASSWORD`='$new_pass' WHERE ID='$id'";
				$connect->query($sql1);
				$info="Mật khẩu của bạn đã được đổi";
			}
			else
			{
				$info="Đã xảy ra lỗi !! Vui lòng thử lại";
			}		
				echo $info;
			}
?>
