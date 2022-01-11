<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    require_once("./connect.php"); 
    if(isset($_SESSION['da_dang_nhap']) && $_SESSION['da_dang_nhap']==1)
{
?>
  <head>
    <title>Coffee - Cart</title>
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
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		<!-- Shoping Cart Section Begin -->
		<section class="ftco-section ftco-cart">
       <form action="./check.php?action=submit" method="POST" role="form">
  			<div class="container">
  				<div class="row">
      			<div class="col-md-12 ftco-animate">
  	    				<table class="table">
  						    <thead class="thead-primary">
  						      <tr class="text-center">
  						        <th>&nbsp;</th>
  						        <th>&nbsp;</th>
  						        <th>Product</th>
  						        <th>Price</th>
  						        <th>Quantity</th>
  						        <th>Total</th>
  						      </tr>
  						    </thead>

                  <tbody>
                    <?php 
                          $total=0;
                          if (isset($_SESSION['cart']) && $_SESSION['cart'] !=null ) 
                          {
                              foreach($_SESSION['cart'] as $key=>$value)
                              {
                                  $item[]=$key;
                              }
                          $str=implode(",",$item);
                          $sql= "SELECT * FROM tbl_san_pham WHERE id_san_pham in ($str)";
                          $query=mysqli_query($con,$sql);
                          while ($row=mysqli_fetch_array($query)) 
                          { $dc=$row["gia_ban"];
                              ;?>

                            <tr class="text-center">
                              <td class="product-remove"><a href="./check.php?action=delete&item=<?php echo $row['id_san_pham']?>"><span class="icon-close"></span></a></td>
                              
                              <td class="image-prod"><div class="img" style="background-image:url(images/<?php echo $row["anh_minh_hoa"];?>);"></div></td>
                              
                              <td class="product-name">
                                <h3><?php echo $row["ten_san_pham"] ;?></h3>
                                <p><?php echo $row["mo_ta"];?></p>
                              </td>
                              
                              <td class="price"><?php echo $dc ;?></td>
                              
                              <td class="quantity" >
                                <div class="input-group mb-3">
                                  <input type="number" style = "text-align: center" name="qty[<?= $row['id_san_pham'] ?>]"
                                        value= <?php echo $_SESSION['cart'][$row['id_san_pham']] ?>>
                                </div>
                              </td>
                              
                              <td class="total"><?php echo $_SESSION['cart'][$row['id_san_pham']]*$dc ;?></td>
                            </tr>
                          <?php 
                          $total+=$_SESSION['cart'][$row['id_san_pham']]*$dc;
                          //session_start();
                          $_SESSION['tong_tien']=$total;
                          }}?>
                  </tbody>
  						  </table>
      			</div>
      		</div>

          <div class="row">
                  <div class="col-lg-12">
                      <div class="shoping__cart__btns">
                          <a href="./menu.php" class="btn btn-primary py-3 px-4">Tiếp tục mua sắm</a>
                          <button type="submit" name="update_click" class="btn btn-primary btn-outline-primary" >Cập nhật giỏ hàng</button>
                          
                      </div>
                  </div>
              </div>
          </div>
    </section>

    <section class="ftco-section ftco-cart">
       <!-- <form action="./check.php?action=submit" method="POST" role="form"> -->
    		<div class="row justify-content-end">
    			<div class="col col-lg-4 col-md-12 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span><?php echo $total;?></span>
    					</p>
    					<!-- <p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p> -->
    					<p class="d-flex">
                      <div class="container">
                      <div class="row">
                        <div class="sidebar-box">
                            
                              <div class="form-group">
                                <span>
                                  <input type="text" name="txtMaGiamGia" class="form-control" value="<?=isset($_GET['txtMaGiamGia']) ? $_GET['txtMaGiamGia'] : ""?>" placeholder="Nhập mã giảm giá">
                                  <button type="submit" name="apdung" class="btn btn-se py-2 px-2">Áp dụng</button>
                              </span>
                              </div>
                        </div>
                        <div class="col-lg-12 ftco-animate p-md-5">
                        <div class="row">
                          <div class="col-md-12 d-flex align-items-center">
                                
                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                <div class="row">
                              <?php 
                                  $h=0;
                                  if (isset($_GET['apdung']))
                                  {
                                    $giam_gia = ($_GET['txtMaGiamGia']);
                                    // var_dump($giam_gia);
                                    

                                      // 2. KẾT NỐI ĐẾN CSDL
                                      $ket_noi = mysqli_connect("localhost", "root", "", "cafee");

                                      // 3. So sánh dữ liệu nhập vào có khớp với dữ liệu lưu trong CSDL hay không?
                                      $sql = 
                                      "SELECT *
                                       FROM tbl_giam_gia WHERE ma_giam = '$giam_gia'";
                                      // 3. Thực thi câu lệnh để xác định dữ liệu có khớp hay không?
                                      $thuc_hien = mysqli_query($ket_noi, $sql);
                                      while ($row=mysqli_fetch_array($thuc_hien)) 
                                      {
                                        $h= $row["giam_tien"];
                                                $num = mysqli_num_rows($thuc_hien);
                                 
                                                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                                                if ($num = 0 || $giam_gia == "") 
                                                {
                                                    //echo '<table border="1" cellspacing="0" cellpadding="10">';
                                                  echo "<script>
                                                        alert('Không tìm thâý mã');
                                                        </script>";
                                                  $h=0;
                                                }
                                                // else {
                                                //     echo "Khong tìm thấy mã!";
                                                // }
                                        }
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
    					</p>
              <p class="d-flex">
                <span>Discount</span>
                <span><?php echo $h;?></span>
              </p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span><?php echo $total;?></span>
    					</p>
    				</div>
                              <div class="form-group">
                                <span>
                                  <a href="./checkout.php" class="btn btn-primary btn-outline-primary" >ĐẶT HÀNG</a>
                              </span>
                              </div>
            <!-- <button type="submit" name="update_click" class="btn btn-primary btn-outline-primary" >THANH TOÁN</button> -->
    				<!-- <p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">THANH TOÁN</a></p> -->
    			</div>
    		</div>
    </form>
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
<?php    
}else{
    echo 
    "<script>
    alert('Bạn cần đăng nhập để mua hàng');
    window.location = 'login.php';
    </script>";
}
?>
