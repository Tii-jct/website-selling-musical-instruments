
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
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,6";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
  <div class="container-fluid mb-3">
        <div class="row px-sm-5">
            <div class="col-lg-12 col-md-12 col-12 ">
                <div id="header-carousel" class="carousel slide carousel-fade mb-0 mb-lg-0" data-ride="carousel">
                  
						<div class="carousel-item position-relative active" style="height: 200px;" style="object-fit:cover;">
                        <img class="mySlides position-absolute w-100 h-100" src="img/baner6.jpg" width="200" height="100" alt="Mô tả hình ảnh của bạn ở đây" style="object-fit: cover;" title="Chi Ti Cao Đẳng Bách Khoa Tây Nguyên" loading="lazy">
                              

                        <img class="mySlides position-absolute w-100 h-100" src="img/baner7.jpg" width="100" height="100" alt="Mô tả hình ảnh của bạn ở đây" style="object-fit: cover;"title="Chi Ti Cao Đẳng Bách Khoa Tây Nguyên" loading="lazy">


                        <img class="mySlides position-absolute w-100 h-100" src="img/baner1.jpg" width="100" height="100" alt="Mô tả hình ảnh của bạn ở đây" style="object-fit: cover;" title="Chi Ti Cao Đẳng Bách Khoa Tây Nguyên"loading="lazy">

								
						</div>
				
				</div>  
			</div>
		</div> 

	</div> 

</style>


		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 1000); // Change image every 2 seconds
		}
		</script>
						
	  <!--  slide kết thúc -->
	    <!-- Featured Start -->
		<div class="container-fluid pt-5">
    <div class="row px-xl-5 col-lg-12 col-md-12 col-sm-12 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 20px;">
                <h2 class="fa fa-check text-primary m-0 mr-3"></h2>
                <h3 class="font-weight-semi-bold m-0">Chất lượng</h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 20px;">
                <h2 class="fa fa-shipping-fast text-primary m-0 mr-2"></h2>
                <h3 class="font-weight-semi-bold m-0">Free miễn phí</h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 20px;">
                <h2 class="fas fa-exchange-alt text-primary m-0 mr-3"></h2>
                <h3 class="font-weight-semi-bold m-0">14-Trả hàng</h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 20px;">
                <h2 class="fa fa-phone-volume text-primary m-0 mr-3"></h2>
                <h3 class="font-weight-semi-bold m-0">24/7 Hỗ trợ</h3>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/guitar/guitar1.jpg" style="object-fit: cover;" width="50" height="50" alt="" title="Chi Ti Cao Đẳng Bách Khoa Tây Nguyên" loading="lazy">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Sản phẩm chất lượng</h2>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"></p>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Chi Ti Cao Đẳng Bách Khoa bên Tây... Nguyên </p>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">ÁP dụng công nghệ mà không đánh mất truyền thống </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"href="san-pham.php">Đến ngay sản phẩm</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/ORGAN-YAMAHA-PSR-SX700.jpg" style="object-fit: non;" width="50" height="50" alt="" title="Chi Ti Cao Đẳng Bách Khoa Tây Nguyên" loading="lazy">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Uy tín</h2>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Chi Ti Cao Đẳng Bách Khoa Tây Nguyên có 20 năm kinh nghiệm </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="san-pham.php">Đến ngay sản phẩm</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/piano-dien-roland-hp-307.jpg" style="object-fit:cover;" width="50" height="50" alt="" title="Chi Ti Cao Đẳng Bách Khoa Tây Nguyên" loading="lazy">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Luôn lắng nghe khách hàng</h2>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">bán hàng dạo luôn tạo niềm vui :) </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="san-pham.php">Đến ngay sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/saos.jpg" width="50" height="50" alt="" title="Chi Ti Cao Đẳng Bách Khoa Tây Nguyên" loading="lazy">
                    <div class="offer-text">
                        <h2 class="text-white text-uppercase">Khuyến mãi</h2>
                        <h2 class="text-white mb-3">20%</h2>
                        <a href="gio-hang.php" class="btn btn-primary">Mua ngay</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/piano/piano3.jpg" width="100" height="100" alt="" title="Chi Ti Cao Đẳng Bách Khoa Tây Nguyên" loading="lazy">
                    <div class="offer-text">
                    <h2 class="text-white text-uppercase">Khuyến mãi</h2>
                        <h2 class="text-white mb-3">20%</h2>
                        <a href="gio-hang.php" class="btn btn-primary">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

<div class="container-fluid pt-5 pb-3">
	

<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Sản Phẩm</span></h2>

    <div class="row px-xl-5">


        <?php
        while ($row = mysqli_fetch_array($query_pro)) {
        ?>
        <div class="col-lg-3 col-md-12 col-sm-12 col-12 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">

                  
                    <img class="img-fluid h-auto w-100" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100" height="100" alt="" title="Xem chi tiết" loading="lazy">


                        <div class="product-action">

                        <!-- khi bạn có một liên kết (anchor) cần phải có văn bản (text) hoặc hình ảnh (image) bên trong -->
                        <a class="btn btn-outline-dark btn-square" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" title="Xem chi tiết"loading="lazy">
  <i class="fa fa-search"></i>.
</a>


                       
                        </div>
                    </div>
                 <div class="text-center py-4">    <!-- xuong dòng -->
                        <a class="h6 text-decoration-none text-truncate" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><?php echo $row['tensanpham'] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h3> <?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></h3><h4 class="text-muted ml-2"><del></del></h4>
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
                            <li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                        } 
                        ?>
                        
                    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

			
	
					