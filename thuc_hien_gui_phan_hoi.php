<?php 
	// 1. Đọc dữ liệu từ trang ĐĂNG NHẬP gửi sang
	$ten_khach_hang = $_POST["txtTenKhachHang"];
	$email_khach_hang = $_POST["txtEmailKhachHang"];
	$nghe_nghiep = $_POST["txtNgheNghiepKhachHang"];
	$phan_hoi = $_POST["txtPhanHoi"];
	//echo "Tài khoản: ".$ten_dang_nhap." ; Mật khẩu: ".$mat_khau;

	// 2. KẾT NỐI ĐẾN CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "cafee");

	// 3. So sánh dữ liệu nhập vào có khớp với dữ liệu lưu trong CSDL hay không?
	$sql = "
		INSERT INTO tbl_phan_hoi_khach_hang(ten_khach_hang,email_khach_hang,nghe_nghiep,phan_hoi)
		VALUES ('".$ten_khach_hang."','".$email_khach_hang."','".$nghe_nghiep."','".$phan_hoi."')
	";
	// 3. Thực thi câu lệnh để xác định dữ liệu có khớp hay không?
	$thuc_hien_phan_hoi = mysqli_query($ket_noi, $sql);

	//$so_luong_nguoi_dung = mysqli_num_rows($nguoi_dung);

	//echo "<br/><br/> Số lượng người dùng: ".$so_luong_nguoi_dung;

	// 4. Điều hướng người dùng về trang họ được phép truy cập
	if ($ten_khach_hang != "" AND $phan_hoi != "" ) {
		# Đẩy người dùng về trang đăng nhập
		echo 
		"
			<script type='text/javascript'>
				window.alert('Cảm ơn bạn đã gửi phản hồi cho chúng tôi.');
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