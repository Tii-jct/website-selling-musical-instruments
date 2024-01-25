<p>Giỏ hàng 
 <?php
  if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?>
</p>
<?php
	if(isset($_SESSION['cart'])){
		
	}
?>
<?php
  if(isset($_SESSION['id_khachhang'])){
?>
<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
   
  </div>
 
</div>
<?php
} 
?><div class="table-responsive">
<table class="table table-bordered table-responsive-md text-center">
  <thead>
    <tr>
      <th>Id</th>
      <th>Mã sp</th>
      <th>Tên sản phẩm</th>
      <th>Hình ảnh</th>
      <th>Số lượng</th>
      <th>Giá sản phẩm</th>
      <th>Thành tiền</th>
      <th>Quản lý</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_SESSION['cart'])) {
      $i = 0;
      $tongtien = 0;
      foreach ($_SESSION['cart'] as $cart_item) {
        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
        $tongtien += $thanhtien;
        $i++;
    ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $cart_item['masp']; ?></td>
          <td><?php echo $cart_item['tensanpham']; ?></td>
          <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"width="100" height="100"  alt="<?php echo $cart_item['tensanpham']; ?>" ></td>

          <td>
            <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
            <?php echo $cart_item['soluong']; ?>
            <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
          </td>
          <td><?php echo number_format($cart_item['giasp'], 0, ',', '.') . 'vnđ'; ?></td>
          <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td>
          <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
        </tr>
    <?php
      }
    ?>
      <tr>
        <td colspan="8">
          <p class="float-left">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p><br>
          <p class="float-right"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
          <div class="clearfix"></div>
          <?php
          if (isset($_SESSION['dangky'])) {
          ?>
            <p><a href="index.php?quanly=vanchuyen">Hình thức vận chuyển</a></p>
          <?php
          } else {
          ?>
            <p><a href="index.php?quanly=dangky">Đăng kí đặt hàng</a></p>
          <?php
          }
          ?>
        </td>
      </tr>
    <?php
    } else {
    ?>
      <tr>
        <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
