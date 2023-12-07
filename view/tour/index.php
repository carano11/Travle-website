<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Star Tour | Chuyến đi tiên cảnh</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="../../vendor/bootstrap.css">
	<link rel="stylesheet" href="../../vendor/angular-material.min.css">
        <link rel="stylesheet" href="../vendor/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../../css/1.css">
	<link rel="stylesheet" type="text/css" href="../../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../../css/component.css" />
	<script src="../../js/modernizr.custom.js"></script>
</head>
<?php session_start(); ?>
<body ng-app="myApp" ng-controller="MyController">
	
	<?php 
	include_once('../../model/tour/connection.php'); 
	
	// xóa các session cmnd_ và idcuoi_
	if(isset($_GET['test']))		
	{
		foreach($_SESSION as $khoa=>$value)
		{
			$key= substr($khoa,0,5);
			if($key=='cmnd_' || $key=='idcuo')
			{
				unset($_SESSION[$khoa]);				
			}
		}
	}
	?>
	<div class="container text-xs-center">
		<?php include_once("../tour/slideshow.php");?>
	</div>
	<div class="container menu">	
		<div class="main">
			<nav id="ttw-hrmenu" class="ttw-hrmenu">
				<ul>
					<li>
						<a href="#">Trang Chủ</a>
						<div class="ttw-hrsub">
								<div class="ttw-hrsub-inner">
									<h4><a href="../../view/tour/index.php" target="blank">Trang chủ</a></h4>
								</div>
							</div><!-- /ttw-hrsub -->					
					</li>
					<li>
						<a href="#">Blog</a>
						<div class="ttw-hrsub">
							<div class="ttw-hrsub-inner"> 
								<div>
									<h4>Tin tức &amp; Điểm đến hot</h4>
									<ul>
										<li><a href="#">Điểm đến cho ngày hè nóng nực</a></li>
										<li><a href="#">Leo núi ban đêm. Tại sao không?</a></li>
										<li><a href="#">Check in nhanh các địa điểm này!</a></li>
									</ul>
								</div>
								
								<div>
									<h4>Review</h4>
									<ul>
										<li><a href="#">Các khách sạn có view đẹp nhất Vũng Tàu!</a></li>
										<li><a href="#">Ăn gì mặc gì khi đi Đà Lạt</a></li>
									</ul>
								</div><!-- /ttw-hrsub-inner -->
							</div><!-- /ttw-hrsub -->
						</li>
						
						<li>
							<a href="#">Quản lý</a>
							<div class="ttw-hrsub">
								<div class="ttw-hrsub-inner">
									<h4><a href="../../view/quantri/index.php" target="blank">Đăng nhập</a></h4>
								</div>
							</div><!-- /ttw-hrsub -->
						</li>
						<li>
							<a href="#">Đăng ký</a>
							<div class="ttw-hrsub">
								<div class="ttw-hrsub-inner">
									<h4><a href="../../view/tour/dangky.php" target="blank">Đăng ký</a></h4>
								</div>
							</div><!-- /ttw-hrsub -->
						</li>
						
					</ul>
				</nav>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="../../js/ttwHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				ttwHorizontalMenu.init();
			});
		</script>				
		

	</div>
	<br>
	<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); 
	$searchS = $_POST['seacrh'];
	?>
	<div class="container" align="right">
		<div class="searchform cf">
			<form action="search.php?search=<?php echo $searchS ?>" method="get">
				<input type="text" placeholder="Nhập tên thành phố bạn muốn tới?" name="search">
				<button type="submit" name="ok">Tìm kiếm</button>
			</form>
		</div>

		<?php 

include '../../controller/controller_search.php';
		?>



	</div>
	<br>

	<div class="container cot">
		<?php 
		include('../../model/tour/pagination.php');
		?>

		<!-- <button type="submit" class="btn btn-info trongnuoc" ng-click="show();" >Trong nước</button>
		<button type="submit" class="btn btn-info ngoainuoc" ng-click="show();" >Ngoài nước</button> -->
		<h1>TOUR DU LỊCH ĐÀ NẴNG</h1>
		<div class="row" ng-hide="display">
			<?php

			while ($row = mysqli_fetch_assoc($resultCountry)){
				?>
				<div class="mottin">

					<a href="chitiettour.php?id=<?php echo $row['ID']?>" class="hrefHCM">
						<div class="vien">
							<img src="../../images/<?php echo $row['IMAGE']?>" alt="" class="float-xs-left" width="250px" height="170px">
							<b><?php echo $row['NAME']?></b><br>							
						</div>
					</a>
				</div>
				<?php
			}
			?>
		</div>

		<div id="pagination" align="center" style="color: black" ng-hide="display">
			<?php

            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
			if ($current_page > 1 && $total_page > 1){
				echo '<a style="color:black" href="index.php?page='.($current_page-1).'">Prev</a> | ';
			}

            // Lặp khoảng giữa
			for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
				if ($i == $current_page){
					echo '<span>'.$i.'</span> | ';
				}
				else{
					echo '<a style="color:black" href="index.php?page='.$i.'">'.$i.'</a> | ';
				}
			}

            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
			if ($current_page < $total_page && $total_page > 1){
				echo '<a style="color:black" href="index.php?page='.($current_page+1).'">Next</a> | ';

			}

			?>
		</div>		
		<div class="row" ng-show="display">
			<?php
			

			while ($rows = mysqli_fetch_assoc($resultGlobal)){
				?>
				<div class="mottin">

					<a href="chitiettour.php?id=<?php echo $rows['ID']?>" class="hrefHCM">
						<div class="vien">
							<img src="../../images/<?php echo $rows['IMAGE']?>" alt="" class="float-xs-left" width="250px" height="170px">
							<b><?php echo $rows['NAME']?></b><br>							
						</div>
					</a>
				</div>
				<?php
			}
			?>
		</div>
		<div id="pagination1" align="center" style="color: black" ng-show="display">
			<?php

            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
			if ($current_page > 1 && $total_page > 1){
				echo '<a style="color:black" href="index.php?page='.($current_page-1).'">Prev</a> | ';
			}

            // Lặp khoảng giữa
			for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
				if ($i == $current_page){
					echo '<span>'.$i.'</span> | ';
				}
				else{
					echo '<a style="color:black" href="index.php?page='.$i.'">'.$i.'</a> | ';
				}
			}

            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
			if ($current_page < $total_page && $total_page > 1){
				echo '<a style="color:black" href="index.php?page='.($current_page+1).'">Next</a> | ';

			}

			?>

		</div>
	</div>	

	<br>
	<br>
	<br>
	<br>
	<p></p>

	<footer>
		<div class="splitter"></div>
		<ul>
			<!-- three footer columns are here -->
		</ul>

		<div class="bar">
			<div class="bar-wrap">



			</div>
		</div>

		<ul>
			<li>

				<div class="text">
					<h4>Thanh toán tiện lợi</h4>
					<div>Dễ dàng chọn phương thức thanh toán.
					Dễ dàng và linh hoạt với momo! Chỉ cần chọn phương thức thanh toán phù hợp với bạn!</a></div>
				</div>
			</li>
			<li>

				<div class="text">
					<h4>Dịch vụ</h4>
					<div>Đặt chỗ dễ dàng và nhanh chóng mọi lúc mọi nơi
					Được xác nhận đặt chỗ tức thì với Du lịch cuộc sống. Quên cảnh xếp hàng mệt mỏi để mua vé đi!</a></div>
				</div>
			</li>
			<li>

				<div class="text">
					<h4>Chăm sóc</h4>
					<div>Luôn thảnh thơi.
						Chúng tôi có bộ phận Hỗ trợ Khách hàng 24/7 luôn sẵn sàng giúp đỡ bạn. Không âu lo, chẳng muộn phiền!
					</a></div>
				</div>
			</li>
		</ul>
		<div class="bar">
			<div class="bar-wrap">
				
				<div class="clear"></div>
				<div class="copyright">&copy;  Liên hệ: </div>
				<div class="copyright">&copy;  444 Trần Đại Nghĩa-Hòa Qúy-Ngũ Hành Sơn </div>
				<div class="copyright">&copy;  Email: star-tour@gmail.com: </div>
				<div class="copyright">&copy;  Copyright 2020 - Nhom7 </div>
				<div class="copyright">&copy;  Số điện thoại: 0967668337</div>
			</div>
		</div>
	</footer>


	<script type="text/javascript" src="../../vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="../../vendor/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="../../vendor/angular-animate.min.js"></script>
	<script type="text/javascript" src="../../vendor/angular-aria.min.js"></script>
	<script type="text/javascript" src="../../vendor/angular-messages.min.js"></script>
	<script type="text/javascript" src="../../vendor/angular-material.min.js"></script>  
	<script type="text/javascript" src="../../js/1.js"></script>

</body>

</html>