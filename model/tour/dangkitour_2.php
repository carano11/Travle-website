<?php 
	session_start();
	include_once('../../connection.php'); 
	
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	
	//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
	$tenkh = "";
	$cmnd = "";
	$dchi = "";
	$ns = "";
	$sdt = "";
	$email = "";	
		
//Lấy giá trị POST từ form vừa submit
if (isset($_POST['btndattour'])) 
{
    if(isset($_POST["txttenkh"])) { $tenkh = $_POST['txttenkh']; }
    if(isset($_POST["txtcmnd"])) { $cmnd = $_POST['txtcmnd']; }
    if(isset($_POST["txtdiachi"])) { $dchi = $_POST['txtdiachi']; }
    if(isset($_POST["txtns"])) { $ns = $_POST['txtns']; }
    if(isset($_POST["txtsdt"])) { $sdt = $_POST['txtsdt']; }
    if(isset($_POST["txtemail"])) { $email = $_POST['txtemail']; }
    if(isset($_POST["txtslnguoilon"])) { $nglon = $_POST['txtslnguoilon']; }
    if(isset($_POST["txtsltreem"])) { $treem = $_POST['txtsltreem']; }

    //Code xử lý, insert dữ liệu vào table customers
	$sql3="select * from customers where IDCARD='$cmnd'";
	$query= $connect->query($sql3);
	$num_row = $query->rowcount();
	echo $num_row;
	if($num_row<1)
	{
		$sql = "INSERT INTO `customers`(`NAME`, `IDCARD`, `ADDRESS`, `PHONENUMBER`, `BIRTHDAY`, `EMAIL`) 
				VALUES ('$tenkh','$cmnd','$dchi','$sdt','$ns','$email')";
		if ($connect->query($sql) == TRUE) 
		{
			echo "Thêm dữ liệu thành công"."<br>";
		}
		 else {
			echo "Error";
		}
	}
	//đẩy qua trang cuối dựa vào tenkh vs cmnd để show thong tin khách trang cuối
	
	//thêm dữ liệu vào bảng order
	foreach($_SESSION as $key1=>$val)
	{
		$id1=substr($key1,0,5);
		if($id1=='chon_')
		{					
			$sql1 = "SELECT CHILD_PRICE,ADULT_PRICE FROM `tour_details`where ID='$val'";
			$tien= $connect->query($sql1);
			
			//lấy giá tiền trẻ em và người lớn
			foreach($tien as $tien1)
			{
				$child= $tien1['CHILD_PRICE'];
				$adult= $tien1['ADULT_PRICE'];	
			}
			echo "aloalo12"; //để echo mà nó ko in ra là nó ko vào vòng for rồi
			//tính tiền
			$ttnglon=$adult* $nglon;
			$tttreem=$child * $treem;
			$total=$ttnglon+$tttreem;
			echo "</br>".$total;
			$_SESSION['thanhtien'.$val]=$total;

			// thêm dữ liệu bảng orders
			$sql2="INSERT INTO `orders`(`TOUR_ID`, `IDCARD`, `CHILDS_AMOUNT`, `ADULTS_AMOUNT`, `TOTAL`) 	
					VALUES ('$val','$cmnd','$treem','$nglon','$total')";
			  if ($connect->query($sql2) == TRUE) 
			 {
				 echo "Thêm dữ liệu Order thành công";
			 }
			  else {
				 echo "Error";
			 }		
		}
	}	     		
	
	 
}
//Đóng database	
 $connect=null;
?>