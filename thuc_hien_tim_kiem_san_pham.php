<!DOCTYPE html>
<html lang="en">
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
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Coffee<small>Blend</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="product-single.php">Single Product</a>
                <a class="dropdown-item" href="room.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small><!-- <?php echo count($_SESSION['cart']);?> --></small></span></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
	  <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Menu c???a ch??ng t??i</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>


  </body>

<?php 
	
	if (isset($_REQUEST['submit'])) {
    $tim_kiem_san_pham = addslashes($_GET['txtTimKiemSanPham']);
    if (empty($tim_kiem_san_pham)) {
        echo "Nh???p t??n S???n ph???m b???n mu???n t??m ki???m";
    } else {
        // Phan dung vong lap while show du lieu
        //$ten_san_pham = $_POST["txtTimKiemSanPham"];
			//echo "T??i kho???n: ".$ten_dang_nhap." ; M???t kh???u: ".$mat_khau;

			// 2. K???T N???I ?????N CSDL
			$ket_noi = mysqli_connect("localhost", "root", "", "cafee");

			// 3. So s??nh d??? li???u nh???p v??o c?? kh???p v???i d??? li???u l??u trong CSDL hay kh??ng?
			$sql = 
			"SELECT * FROM tbl_san_pham WHERE ten_san_pham like '%$tim_kiem_san_pham%'";
			// 3. Th???c thi c??u l???nh ????? x??c ?????nh d??? li???u c?? kh???p hay kh??ng?
			$thuc_hien_phan_hoi = mysqli_query($ket_noi, $sql);

			// ?????m s??? ??ong tr??? v??? trong sql.
                $num = mysqli_num_rows($thuc_hien_phan_hoi);
 
                // N???u c?? k???t qu??? th?? hi???n th???, ng?????c l???i th?? th??ng b??o kh??ng t??m th???y k???t qu???
                if ($num > 0 && $tim_kiem_san_pham != "") 
                {
                    // D??ng $num ????? ?????m s??? d??ng tr??? v???.
                    echo "$num ket qua tra ve voi tu khoa <b>$tim_kiem_san_pham</b>";
 
                    // V??ng l???p while & mysql_fetch_assoc d??ng ????? l???y to??n b??? d??? li???u c?? trong table v?? tr??? v??? d??? li???u ??? d???ng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysqli_fetch_assoc($thuc_hien_phan_hoi)) {
                        // echo '<tr>';
                        //     echo "<td>{$row['user_id']}</td>";
                        //     echo "<td>{$row['username']}</td>";
                        //     echo "<td>{$row['password']}</td>";
                        //     echo "<td>{$row['email']}</td>";
                        //     echo "<td>{$row['address']}</td>";
                        // echo '</tr>';
                        ;?>
                        <div class="col-md-12 d-flex align-items-center">
		            
			            <div class="tab-content ftco-animate" id="v-pills-tabContent">

			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
			              	<div class="row">
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
                    
                    //echo '</table>';
                	}
            	}
                else {
                    echo "Khong tim thay ket qua!";
                }
    		}
		}
	// // 1. ?????c d??? li???u t??? trang ????NG NH???P g???i sang
	// $ten_san_pham = $_POST["txtTimKiemSanPham"];
	// //echo "T??i kho???n: ".$ten_dang_nhap." ; M???t kh???u: ".$mat_khau;

	// // 2. K???T N???I ?????N CSDL
	// $ket_noi = mysqli_connect("localhost", "root", "", "cafee");

	// // 3. So s??nh d??? li???u nh???p v??o c?? kh???p v???i d??? li???u l??u trong CSDL hay kh??ng?
	// $sql = 
	// "SELECT * FROM tbl_san_pham WHERE ten_san_pham=$ten_san_pham";
	// // 3. Th???c thi c??u l???nh ????? x??c ?????nh d??? li???u c?? kh???p hay kh??ng?
	// $thuc_hien_phan_hoi = mysqli_query($ket_noi, $sql);

	// //$so_luong_nguoi_dung = mysqli_num_rows($nguoi_dung);

	// //echo "<br/><br/> S??? l?????ng ng?????i d??ng: ".$so_luong_nguoi_dung;

	// // 4. ??i???u h?????ng ng?????i d??ng v??? trang h??? ???????c ph??p truy c???p
	// if ($ten_san_pham != "") {
	// 	# ?????y ng?????i d??ng v??? trang ????ng nh???p
	// 	// echo 
	// 	// "
	// 	// 	<script type='text/javascript'>
	// 	// 		window.alert('C???m ??n b???n ???? g???i ph???n h???i cho ch??ng t??i.');
	// 	// 	</script>
	// 	// ";
	// 	echo 
	// 	"
	// 		<script type='text/javascript'>
	// 			window.location.href='menu.php'
	// 		</script>
	// 	";
	// } else {
	// 	# Kh???i t???o phi??n l??m vi???c cho ng?????i ????ng nh???p th??nh c??ng
	// 	// session_start();
	// 	// $_SESSION['da_dang_nhap']=1;

	// 	# ?????y ng?????i d??ng v??? trang qu???n tr??? h??? th???ng
	// 	echo 
	// 	"
	// 		<script type='text/javascript'>
	// 			window.alert('B???n h??y nh???p ????? th??ng tin');
	// 		</script>
	// 	";
	// 	echo 
	// 	"
	// 		<script type='text/javascript'>
	// 			window.location.href='contact.php'
	// 		</script>
	// 	";
	// }