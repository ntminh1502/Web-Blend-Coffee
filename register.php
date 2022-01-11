<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
   ?>
  <head>
    <title>Coffee Blend - ĐĂNG NHẬP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
    function validateForm() {
      var x1 = document.forms["form-dang-nhap"]["ten_dang_nhap"].value;
      if (x1 == "") {
          alert("Hãy nhập tên đăng nhập");
          document.forms["form-dang-nhap"]["ten_dang_nhap"].focus();
          return false;
      }
      
      var x2 = document.forms["form-dang-nhap"]["password"].value;
      if (x2 == "" || x2.length < 4) {
          alert("Mật khẩu không chính xác");
          document.forms["form-dang-nhap"]["password"].focus();
          return false;
      }                     
    }
  </script>
  </head>
  <body>
  	<?php 
      include("nav.php");
    ?>
    <!-- END nav -->

    <section class="ftco-menu mb-5 pb-5">
    <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">                
                    <form id="form-dang-ky" class="form-horizontal" action="thuc_hien_register.php" method="post" onsubmit="return(validateForm());" style="margin-top: 70px;" enctype="multipart/form-data">
                      <fieldset>
                        <div id="legend">
                          <legend  style="text-align: center; font-weight: bold; font-size: 200%;">ĐĂNG KÝ TÀI KHOẢN</legend>
                        </div>
                        <hr>
                        <div class="control-group">
                           <!-- Name -->
                         <label class="control-label" for="name">Tên</label>
                          <div class="controls">
                            <input type="text" id="name" name="name" placeholder="Name" class="form-control" >
                            
                          </div>
                        </div>  
                        <div class="control-group">
                        <!-- Ngày sinh-->
                         <label class="control-label" for="birthday">Ngày sinh</label>
                          <div class="controls">
                            <input type="date" id="birthday" name="birthday" placeholder="Birthday" class="form-control" >
                           
                          </div>
                        </div>  
                        <div class="control-group">
                        <!-- Phone-->
                         <label class="control-label" for="phone">Số điện thoại</label>
                          <div class="controls">
                            <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" >
                         
                          </div>
                        </div>  
                        <div class="control-group">
                         <!-- E-mail -->
                          <label class="control-label" for="email">Email</label>
                          <div class="controls">
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control" >
                          
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Username -->
                          <label class="control-label" for="username">Tên đăng nhập</label>
                          <div class="controls">
                            <input type="text" id="username" name="username" placeholder="Username" class="form-control" >                          
                          </div>
                        </div>
                        
                        <div class="control-group">  
                      
                         <!-- Password-->
                          <label class="control-label" for="password">Mật khẩu</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" >
                            <p class="help-block">Mật khẩu của bạn cần lớn hơn hoặc bằng 6 kí tự</p>
                          </div>
                        </div>
                     
                        
                        <div class="control-group">
                          <!-- nhập lại mật khẩu -->
                          <label class="control-label" for="password_confirm">Xác nhận mật khẩu</label>
                          <div class="controls">
                            <input type="password" id="nhap_lai_mat_khau" name="nhap_lai_mat_khau" placeholder="Confirm password" class="form-control" >
                          
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- nhập lại mật khẩu -->
                          <label class="control-label" for="image">Thêm ảnh đại diện</label>
                          <div class="controls">
                            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"/>
                          
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Button -->
                          <hr>
                          <div class="controls" style="text-align: center;">
                            <input class="btn button"  style="width: 200px"  value="Đăng ký" type="submit" />
                          </div>
                        </div>
                      </fieldset>
                    </form>
                    
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
      </section>

    <?php 
      include("footer.php");
    ?>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>