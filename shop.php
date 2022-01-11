<!DOCTYPE html>
<html lang="en"> 
<?php 
    session_start();
   ?>
  <head>

    <title>Coffee - Shop</title>
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
  </head>
  <body>
  	<?php 
      include("nav.php");
    ?>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Đặt hàng</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Shop</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		            	<a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0" role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee</a>

		              <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false">Bánh & Hạt</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Nguyên liệu pha cà phê</a>

		              <!-- <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a> -->
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">
		            	<?php
								// 1. KẾT NỐI ĐẾN CSDL
								$ket_noi = mysqli_connect("localhost", "root", "", "cafee");
						;?>

		              <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
		              	<div class="row">
		              		<?php
								// 1. KẾT NỐI ĐẾN CSDL
								//$ket_noi = mysqli_connect("localhost", "root", "", "cafee");

								// 2. Lấy dữ liệu mong muốn
								$sql = "
									SELECT *
									FROM tbl_san_pham
									WHERE id_loai_san_pham = 1 OR id_loai_san_pham = 2
									ORDER BY id_san_pham DESC
								";

								// 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
								$noi_dung_san_pham = mysqli_query($ket_noi, $sql);

								//4. Hiển thị dữ liệu lấy được lên màn hình
								$i=0;
								while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
									$i++;
							;?>
		              		<div class="col-md-3">
						        		<div class="menu-entry">
						    					<a href="#" class="img" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="product-single.php"><?php echo $row["ten_san_pham"];?></a></h3>
						    						<p><?php echo $row["mo_ta"];?></p>
						    						<p class="price"><span><?php echo $row["gia_ban"];?></span></p>
						    						<p><a href="cart.php" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
						    					</div>
						    				</div>
						        	</div>
						    <?php
								}
							;?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		                <div class="row">
		                	<?php
								// 1. KẾT NỐI ĐẾN CSDL
								//$ket_noi = mysqli_connect("localhost", "root", "", "cafee");

								// 2. Lấy dữ liệu mong muốn
								$sql1 = "
									SELECT *
									FROM tbl_san_pham
									WHERE id_loai_san_pham = 3
									ORDER BY id_san_pham DESC
								";

								// 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
								$noi_dung_san_pham = mysqli_query($ket_noi, $sql1);

								//4. Hiển thị dữ liệu lấy được lên màn hình
								$i=0;
								while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
									$i++;
							;?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></a>
		              				<div class="text">
		              					<h3><a href="product-single.php"><?php echo $row["ten_san_pham"];?></a></h3>
		              					<p><?php echo $row["mo_ta"];?></p>
		              					<p class="price"><span><?php echo $row["gia_ban"];?></span></p>
		              					<p><a href="cart.php" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<?php
								}
							;?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<?php
								// 1. KẾT NỐI ĐẾN CSDL
								//$ket_noi = mysqli_connect("localhost", "root", "", "cafee");

								// 2. Lấy dữ liệu mong muốn
								$sql2 = "
									SELECT *
									FROM tbl_san_pham
									WHERE id_loai_san_pham = 4
									ORDER BY id_san_pham DESC
								";

								// 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
								$noi_dung_san_pham = mysqli_query($ket_noi, $sql2);

								//4. Hiển thị dữ liệu lấy được lên màn hình
								$i=0;
								while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
									$i++;
							;?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></a>
		              				<div class="text">
		              					<h3><a href="product-single.php"><?php echo $row["ten_san_pham"];?></a></h3>
		              					<p><?php echo $row["mo_ta"];?></p>
		              					<p class="price"><span><?php echo $row["gia_ban"];?></span></p>
		              					<p><a href="cart.php" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<?php
								}
							;?>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
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