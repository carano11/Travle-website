<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
          * {
            box-sizing:border-box
          }

          /* Slideshow container */
          .slideshow-container {
            max-width: 1360px;
            position: relative;
            margin: auto;
          }
          /* Ẩn các slider */
          .mySlides {
              display: none;
          }
         
          /* định dạng các chấm chuyển đổi các slide */
          .dot {
            cursor:pointer;
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }
          /* khi được hover, active đổi màu nền */
          .active, .dot:hover {
            background-color: #717171;
          }

          /* Thêm hiệu ứng khi chuyển đổi các slide */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 2s;
            animation-name: fade;
            animation-duration: 2s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
          @media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
        </style>
    </head>
    <body> 
      <div class="header-middle">
        <!--header-middle-->
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <!-- <div class="logo pull-left">
                <img src="https://scontent.fhan3-3.fna.fbcdn.net/v/t1.15752-9/100599437_189385235644408_4256422494254137344_n.png?_nc_cat=101&_nc_sid=b96e70&_nc_ohc=4y-iNpshBfcAX8i46qh&_nc_ht=scontent.fhan3-3.fna&oh=3c5a602c01d0e62c78262b38112e1d53&oe=5EFC94F6" width="100" alt="SINNOVA" style="border:none; display:block;" />
              </div> -->
            </div>
            <!-- <div class="col-sm-8">
              <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                  <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Đăng ký</a></li>
                  <li><a href="login.html"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                </ul>
              </div>
            </div>
 -->          </div>
      <div class="slideshow-container">       
        <div class="mySlides fade">
          <img src="../../images/hihi.png" style="width:100%; height: 350px">         
        </div>

        <div class="mySlides fade">
          <img src="../../images/depma.jpg" style="width:100%; height: 350px">          
        </div>


        <div class="mySlides fade">
          <img src="../../images/999.jpg" style="width:100%; height: 350px">          
        </div>

        <div class="mySlides fade">
          <img src="../../images/vuihong.jpg" style="width:100%; height: 350px">          
        </div>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>  
    </body>
    <script>
      //khai báo biến slideIndex đại diện cho slide hiện tại
      var slideIndex;
      // KHai bào hàm hiển thị slide
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex].style.display = "block";  
          dots[slideIndex].className += " active";
          //chuyển đến slide tiếp theo
          slideIndex++;
          //nếu đang ở slide cuối cùng thì chuyển về slide đầu
          if (slideIndex > slides.length - 1) {
            slideIndex = 0
          }    
          //tự động chuyển đổi slide sau 5s
          setTimeout(showSlides, 2500);
      }
      //mặc định hiển thị slide đầu tiên 
      showSlides(slideIndex = 0);


      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    </script>
</html>