<?php
if (isset($_POST['doimatkhau'])) {
    $taikhoan = $_POST['email'];
    $matkhau_cu = md5($_POST['password_cu']);
    $matkhau_moi = md5($_POST['password_moi']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $sql_update = mysqli_query($mysqli, "UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
        echo '<p style="color:green">Mật khẩu đã được thay đổi.</p>';
    } else {
        echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng, vui lòng nhập lại.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <!-- Include Bootstrap CSS -->
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Đổi mật khẩu</h2>
            <form action="" autocomplete="off" method="POST">
                <div class="form-group">
                    <label for="email">Tài khoản (Email)</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password_cu">Mật khẩu cũ</label>
                    <input type="password" class="form-control" name="password_cu" required>
                </div>
                <div class="form-group">
                    <label for="password_moi">Mật khẩu mới</label>
                    <input type="password" class="form-control" name="password_moi" required>
                </div>
                <button type="submit" name="doimatkhau" class="btn btn-primary">Đổi mật khẩu</button>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
