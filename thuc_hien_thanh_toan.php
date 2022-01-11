<?php 
	// 1. Đọc dữ liệu từ trang ĐĂNG NHẬP gửi sang
	$ten_khach_hang = $_POST["txtTenKhachHang"];
	$quan = $_POST["txtQuan"];
	$phuong = $_POST["txtPhuong"];
	$duong = $_POST["txtDuong"];
	$cu_the = $_POST["txtCuThe"];
	$so_dien_thoai = $_POST["txtSoDienThoai"];
	$email = $_POST["txtEmail"];
	//echo "Tài khoản: ".$ten_dang_nhap." ; Mật khẩu: ".$mat_khau;
	$dia_chi = $cu_the. " " .$duong. " " .$phuong. " " .$quan
	// 2. KẾT NỐI ĐẾN CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "cafee");

	// 3. So sánh dữ liệu nhập vào có khớp với dữ liệu lưu trong CSDL hay không?
	$sql = "
		INSERT INTO tbl_hoa_don(ten_khach_hang,tong_tien,dia_chi,so_dien_thoai)
		VALUES ('".$ten_khach_hang."','".$total."','".$dia_chi."','".$so_dien_thoai."')
	";
	// 3. Thực thi câu lệnh để xác định dữ liệu có khớp hay không?
	$thuc_hien_phan_hoi = mysqli_query($ket_noi, $sql);

	//$so_luong_nguoi_dung = mysqli_num_rows($nguoi_dung);

	//echo "<br/><br/> Số lượng người dùng: ".$so_luong_nguoi_dung;

	// 4. Điều hướng người dùng về trang họ được phép truy cập
	if ($ten_khach_hang != "" AND $quan != "" AND $phuong != "" AND $duong != "" AND $cu_the != "" AND $so_dien_thoai != ""  ) {
		# Đẩy người dùng về trang đăng nhập
		echo 
		"
			<script type='text/javascript'>
				window.alert('Đặt đơn thành công.');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='index.php'
			</script>
		";
	} else {
		# Khởi tạo phiên làm việc cho người đăng nhập thành công
		// session_start();
		// $_SESSION['da_dang_nhap']=1;

		# Đẩy người dùng về trang quản trị hệ thống
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn hãy nhập đủ thông tin');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='contact.php'
			</script>
		";
	}