<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
   ?>
  <head>
    <title>Coffee - Menu</title>
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
            	<h1 class="mb-3 mt-5 bread">Menu của chúng tôi</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                	<div class="icon">
	                  <span class="icon-search"></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>

        </div>
      </div>
    </section>  -->

    <!-- <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>(+84) 968 686 868</h3>
	    						<p>Nằm trên phố Nghi Tàm, tầm nhìn rộng ra phía Hồ Tây lộng gió.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>189 Nghi Tàm</h3>
	    						<p>	Tây Hồ, Hà Nội, Việt Nam</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Mở cửa tất cả các ngày trong tuần</h3>
	    						<p>10 giờ Sáng - 11 giờ 30 Tối</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Đặt bàn</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Họ & đệm">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Tên">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Ngày">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Giờ">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="SĐT">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Lời nhắn"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
		            </div>
	    				</div>
	    			</form>
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
    </section> -->

    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Khám phá</span>
            <h2 class="mb-4">Sản phẩm của chúng tôi</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
          <div class="container">
        <div class="row">
        	<div class="sidebar-box">
              <form action="menu.php" method="get" class="search-form">
                <div class="form-group">
                	<div class="icon">
	                  <span class="icon-search"></span>
                  </div>
                  <input type="text" name="txtTimKiemSanPham" class="form-control" placeholder="Tìm kiếm...">
                  <input type="submit" name="submit" value="Submit" /><i class="icon-search"></i>
                </div>
              </form>

             <!--  <form action="form.php" method="post">
			        Search: <input type="text" name="term" /><br />
			      <input type="submit" name="submit" value="Submit" /><i class="icon-search"></i>
		      </form> -->

            </div>
				<div class="col-lg-12 ftco-animate p-md-5">
				<div class="row">
			        <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
            <?php 
	
				if (isset($_REQUEST['submit'])) {
			    $tim_kiem_san_pham = addslashes($_GET['txtTimKiemSanPham']);
			    if (empty($tim_kiem_san_pham)) {
			        echo "Nhập tên Sản phẩm bạn muốn tìm kiếm";
			    } else {
			        // Phan dung vong lap while show du lieu
			        //$ten_san_pham = $_POST["txtTimKiemSanPham"];
						//echo "Tài khoản: ".$ten_dang_nhap." ; Mật khẩu: ".$mat_khau;

						// 2. KẾT NỐI ĐẾN CSDL
						$ket_noi = mysqli_connect("localhost", "root", "", "cafee");

						// 3. So sánh dữ liệu nhập vào có khớp với dữ liệu lưu trong CSDL hay không?
						$sql = 
						"SELECT * FROM tbl_san_pham WHERE ten_san_pham like '%$tim_kiem_san_pham%'";
						// 3. Thực thi câu lệnh để xác định dữ liệu có khớp hay không?
						$thuc_hien_phan_hoi = mysqli_query($ket_noi, $sql);

						// Đếm số đong trả về trong sql.
			                $num = mysqli_num_rows($thuc_hien_phan_hoi);
			 
			                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
			                if ($num > 0 && $tim_kiem_san_pham != "") 
			                {
			                    // Dùng $num để đếm số dòng trả về.
			                    echo "$num ket qua tra ve voi tu khoa <b> $tim_kiem_san_pham </b>";
			 
			                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
			                    echo '<table border="1" cellspacing="0" cellpadding="10">';
			                    while ($row = mysqli_fetch_assoc($thuc_hien_phan_hoi)) {
			                        //echo "<br>";
			                        //     echo "<td>{$row['user_id']}</td>";
			                        //     echo "<td>{$row['username']}</td>";
			                        //     echo "<td>{$row['password']}</td>";
			                        //     echo "<td>{$row['email']}</td>";
			                        //     echo "<td>{$row['address']}</td>";
			                        // echo '</tr>';
			                        ;?>
						              	<!-- <div class="row"> -->
			                        				<div class="col-md-4 text-center">
					              						<div class="menu-wrap">
															<a href="#" class="menu-img img mb-4" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></a>
								              				<div class="text">
								              					<h3><a href="#"><?php echo $row["ten_san_pham"];?></a></h3>
								              					<p><?php echo $row["mo_ta"];?></p>
								              					<p class="price"><span><?php echo $row["gia_ban"];?></span></p>
								              					<p><a href="./check.php?action=addcart&item=<?php echo $row['id_san_pham']?>" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
								              				</div>
								              			</div>
								              		</div>
								        </div>
								       </div>
								    </div>
								</div>


			                <?php
			                    
			                    //echo '</table>';
			                	}
			            	}
			                else {
			                    echo "Khong tim thay ket qua!";
			                }
			    		}
					}
					;?>
            
        </div>
      </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Cà phê</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Bánh & Hạt</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Nguyên liệu</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<?php
										// 1. KẾT NỐI ĐẾN CSDL
										$ket_noi = mysqli_connect("localhost", "root", "", "cafee");

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
		              					<div class="col-md-4 text-center">
		              						<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></a>
					              				<div class="text">
					              					<h3><a href="#"><?php echo $row["ten_san_pham"];?></a></h3>
					              					<p><?php echo $row["mo_ta"];?></p>
					              					<p class="price"><span><?php echo $row["gia_ban"];?></span></p>
					              					<p><a href="./check.php?action=addcart&item=<?php echo $row['id_san_pham']?>" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
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
		              					<div class="col-md-4 text-center">
		              						<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></a>
					              				<div class="text">
					              					<h3><a href="#"><?php echo $row["ten_san_pham"];?></a></h3>
					              					<p><?php echo $row["mo_ta"];?></p>
					              					<p class="price"><span><?php echo $row["gia_ban"];?></span></p>
					              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>

					        		<?php
										}
									;?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
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
		              					<div class="col-md-4 text-center">
		              						<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/<?php echo $row["anh_minh_hoa"];?>);"></a>
					              				<div class="text">
					              					<h3><a href="#"><?php echo $row["ten_san_pham"];?></a></h3>
					              					<p><?php echo $row["mo_ta"];?></p>
					              					<p class="price"><span><?php echo $row["gia_ban"];?></span></p>
					              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
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