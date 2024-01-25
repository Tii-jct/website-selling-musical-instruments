<?php
if(isset($_POST['dangnhap'])){
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = $_POST['password'];

    // Sử dụng Prepared Statements
    $stmt = $mysqli->prepare("SELECT * FROM tbl_dangky WHERE email=? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row_data = $result->fetch_assoc();
    $stmt->close();

    if($row_data && password_verify($password, $row_data['matkhau'])){
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['email'] = $row_data['email'];
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        // header("Location:index.php?quanly=giohang");
    } else {
        echo '<p style="color:red">Mật khẩu hoặc Email sai, vui lòng nhập lại.</p>';
    }
} 
?>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Đăng nhập khách hàng</h2>
            <form action="" autocomplete="off" method="POST">
                <div class="form-group">
                    <label for="email">Tài khoản (Email)</label>
                    <input type="text" class="form-control" name="email" placeholder="Email..." required>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu..." required>
                </div>
                <button type="submit" name="dangnhap" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


