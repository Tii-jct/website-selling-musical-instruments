<!-- <?php 
	include('admincp/config/config.php');


?>
<p>Cám ơn bạn đã mua hàng ,chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất</p>

 -->


 <?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*3)-3;
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,5";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
  
	  <!--  slide kết thúc -->
	    <!-- Featured Start -->
		

<div class="container-fluid pt-5 pb-3">
	

<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Sản Phẩm</span></h2>
 
 
    <div class="row px-xl-5">

  
 <div class="col col-lg-2 col-md-4 col-sm-6 col-5">
         1 of 3
    </div> 
        <?php
        while ($row = mysqli_fetch_array($query_pro)) {
        ?>
        
        <div class="col-lg-2 col-md-3 col-sm-5 col-4 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img alt class="img-fluid h-auto w-100" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><i class="fa fa-search"></i></a>
                       
                        </div>
                    </div>
                 <div class="text-center py-4">    <!-- xuong dòng -->
                        <a class="h6 text-decoration-none text-truncate" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><?php echo $row['tensanpham'] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5> <?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></h5><h6 class="text-muted ml-2"><del></del></h6>
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
        <?php
        }
        ?>
	
    </div>
</div>


			
	
					<!-- <?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-2">
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img class="img img-responsive" width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="title_product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
							
						</a>
					</div>
					<?php
					} 
					?> -->
				</div>
				<div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
					    padding: 0;
					    margin: 0;
					    list-style: none;
					}
					ul.list_trang li {
					    float: left;
					    padding: 5px 13px;
					    margin: 5px;
					    background: burlywood;
					    display: block;
					}
					ul.list_trang li a {
					    color: #000;
					    text-align: center;
					    text-decoration: none;
					 
					}
				</style>
				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/3);
				?>
				<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
				<div class="col-lg-3 col-md-4 col-sm-6 col-5 pb-1">
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?>><a href="cacsanpham.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?>
					
				</div>

























