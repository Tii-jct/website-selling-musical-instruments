<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>



<!-- <h3>Danh mục sản phẩm : -->
	
<?php echo $row_title['tendanhmuc'] ?>
				
 <div class="container-fluid pt-5 pb-3">
    <div class="row px-xl-5">
        <?php while($row = mysqli_fetch_array($query_pro)) { ?>
   
        <div class="col-lg-3 col-md-4 col-sm-6 col-5 pb-1">
    <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <div class="product-image-wrapper">
                    <img  class="img-fluid h-auto w-100" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"alt="<?php echo $cart_item['tensanpham']; ?>">

                    </div>
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><i class="fa fa-search"></i></a>
        
                    </div>
                </div>
                <div class="product-info text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><?php echo $row['tensanpham'] ?></a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></h5><h6 class="text-muted ml-2"><del></del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
