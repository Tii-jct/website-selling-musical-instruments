<?php
if(isset($_POST['dangky'])) {
    $tenkhachhang = mysqli_real_escape_string($mysqli, $_POST['hovaten']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $dienthoai = mysqli_real_escape_string($mysqli, $_POST['dienthoai']);
    $matkhau = password_hash($_POST['matkhau'], PASSWORD_DEFAULT);
    $diachi = mysqli_real_escape_string($mysqli, $_POST['diachi']);

    $stmt = $mysqli->prepare("INSERT INTO tbl_dangky (tenkhachhang, email, diachi, matkhau, dienthoai) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $tenkhachhang, $email, $diachi, $matkhau, $dienthoai);

    if ($stmt->execute()) {
        echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['email'] = $email;
        $_SESSION['id_khachhang'] = $stmt->insert_id;
    } else {
        echo '<p style="color:red">Đăng ký thất bại</p>';
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành </title>
    <!-- Include Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  -->
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Đăng ký thành viên</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="hovaten">Họ tên</label>
                    <input type="text" class="form-control" name="hovaten" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="dienthoai">Điện thoại</label>
                    <input type="text" class="form-control" name="dienthoai" required>
                </div>
                <div class="form-group">
                    <label for="diachi">Địa chỉ</label>
                    <input type="text" class="form-control" name="diachi" required>
                </div>
                <div class="form-group">
                    <label for="matkhau">Mật khẩu</label>
                    <input type="password" class="form-control" name="matkhau" required>
                </div>
                <button type="submit" name="dangky" class="btn btn-primary">Đăng ký</button>
                <p class="mt-2">Đã có tài khoản? <a href="index.php?quanly=dangnhap">Đăng nhập ngay</a></p>
            </form>
           
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
