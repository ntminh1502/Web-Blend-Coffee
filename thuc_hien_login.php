<?php require_once("./connect.php");
    // 1. Đọc dữ liệu từ trang ĐĂNG NHẬP gửi sang
    $ten_dang_nhap = $_POST["txtTaiKhoan"];
    $mat_khau = $_POST["txtMatKhau"];

    // 2. KẾT NỐI ĐẾN CSDL

    // 3. So sánh dữ liệu nhập vào có khớp với dữ liệu lưu trong CSDL hay không?
    $sql = "
        SELECT *
        FROM tbl_khach_hang
        WHERE username='".$ten_dang_nhap."' AND password='".$mat_khau."'
    ";

    // 3. Thực thi câu lệnh để xác định dữ liệu có khớp hay không?
    $nguoi_dung = mysqli_query($con, $sql);
    $so_luong_nguoi_dung = mysqli_num_rows($nguoi_dung);

    //echo "<br/><br/> Số lượng người dùng: ".$so_luong_nguoi_dung;

    // 4. Điều hướng người dùng về trang họ được phép truy cập
    if ($so_luong_nguoi_dung ==0) {
        {    echo "
            # Đẩy người dùng về trang đăng nhập
                <script>
                alert('Tên đăng nhập hoặc mật khẩu sai');
                window.location = 'login.php';
                </script>
            ";
        }

    }
    else {
        # Khởi tạo phiên làm việc cho người đăng nhập thành công
        session_start();
        $_SESSION['da_dang_nhap']=1;

        # Đẩy người dùng về trang quản trị hệ thống
        echo 
        "
            <script>
            alert('Đăng nhập thành công');
            window.location = 'index.php';
            </script>
        ";
    }

;?>