<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
   ?>
  <head>
    <title>Coffee - CHI TIẾT SẢN PHẨM</title>
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
            	<h1 class="mb-3 mt-5 bread">CHI TIẾT SẢN PHẨM</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>CHI TIẾT</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 pb-3">
            <h3 class="mb-5 heading-pricing ftco-animate">Cà phê thủ công - Hand Drip</h3>

            <?php
          // 1. KẾT NỐI ĐẾN CSDL
          $ket_noi = mysqli_connect("localhost", "root", "", "cafee");

          // 2. Lấy dữ liệu mong muốn
          $sql = "
            SELECT *
            FROM tbl_san_pham
            WHERE id_loai_san_pham = 1
            ORDER BY id_san_pham DESC
          ";

          // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
          $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

          //4. Hiển thị dữ liệu lấy được lên màn hình
          $i=0;
          while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
            $i++;
        ;?>

        <div class="pricing-entry d-flex ftco-animate">
              <div class="img" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></div>
              <div class="desc pl-3">
                <div class="d-flex text align-items-center">
                  <h3><span><?php echo $row["ten_san_pham"];?></span></h3>
                  <span class="price"><?php echo $row["gia_ban"];?></span>
                </div>
                <div class="d-block">
                  <p><?php echo $row["mo_ta"];?></p>
                </div>
              </div>
            </div>

            <?php
          }
        ;?>
      </div>


          <div class="col-md-6 mb-5 pb-3">
            <h3 class="mb-5 heading-pricing ftco-animate">Cà phê pha máy - Coffee Espresso</h3>
            <?php
          // 1. KẾT NỐI ĐẾN CSDL
          $ket_noi = mysqli_connect("localhost", "root", "", "cafee");

          // 2. Lấy dữ liệu mong muốn
          $sql = "
            SELECT *
            FROM tbl_san_pham
            WHERE id_loai_san_pham = 2
            ORDER BY id_san_pham DESC
          ";

          // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
          $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

          //4. Hiển thị dữ liệu lấy được lên màn hình
          $i=0;
          while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
            $i++;
        ;?>

        <div class="pricing-entry d-flex ftco-animate">
              <div class="img" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></div>
              <div class="desc pl-3">
                <div class="d-flex text align-items-center">
                  <h3><span><?php echo $row["ten_san_pham"];?></span></h3>
                  <span class="price"><?php echo $row["gia_ban"];?></span>
                </div>
                <div class="d-block">
                  <p><?php echo $row["mo_ta"];?></p>
                </div>
              </div>
            </div>

            <?php
          }
        ;?>
          </div>

          <div class="col-md-6">
            <h3 class="mb-5 heading-pricing ftco-animate">Bánh & Hạt</h3>
            <?php
          // 1. KẾT NỐI ĐẾN CSDL
          $ket_noi = mysqli_connect("localhost", "root", "", "cafee");

          // 2. Lấy dữ liệu mong muốn
          $sql = "
            SELECT *
            FROM tbl_san_pham
            WHERE id_loai_san_pham = 3
            ORDER BY id_san_pham DESC
          ";

          // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
          $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

          //4. Hiển thị dữ liệu lấy được lên màn hình
          $i=0;
          while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
            $i++;
        ;?>

        <div class="pricing-entry d-flex ftco-animate">
              <div class="img" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></div>
              <div class="desc pl-3">
                <div class="d-flex text align-items-center">
                  <h3><span><?php echo $row["ten_san_pham"];?></span></h3>
                  <span class="price"><?php echo $row["gia_ban"];?></span>
                </div>
                <div class="d-block">
                  <p><?php echo $row["mo_ta"];?></p>
                </div>
              </div>
            </div>

            <?php
          }
        ;?>
          </div>

          <div class="col-md-6">
            <h3 class="mb-5 heading-pricing ftco-animate">Nguyên liệu pha chế</h3>
            <?php
          // 1. KẾT NỐI ĐẾN CSDL
          $ket_noi = mysqli_connect("localhost", "root", "", "cafee");

          // 2. Lấy dữ liệu mong muốn
          $sql = "
            SELECT *
            FROM tbl_san_pham
            WHERE id_loai_san_pham = 4
            ORDER BY id_san_pham DESC
          ";

          // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
          $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

          //4. Hiển thị dữ liệu lấy được lên màn hình
          $i=0;
          while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
            $i++;
        ;?>

        <div class="pricing-entry d-flex ftco-animate">
              <div class="img" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></div>
              <div class="desc pl-3">
                <div class="d-flex text align-items-center">
                  <h3><span><?php echo $row["ten_san_pham"];?></span></h3>
                  <span class="price"><?php echo $row["gia_ban"];?></span>
                </div>
                <div class="d-block">
                  <p><?php echo $row["mo_ta"];?></p>
                </div>
              </div>
            </div>

            <?php
          }
        ;?>
          </div>
        </div>
      </div>
    </section>

   

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Related products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

    
  </body>
</html>