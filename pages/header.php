


    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 col-5 pb-1">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="index.php?quanly=lienhe">About</a>
                    <a class="text-body mr-3" href="index.php?quanly=lienhe">Contact</a>
                    <a class="text-body mr-3" href="index.php?quanly=lienhe">Help</a>
                    <a class="text-body mr-3" href="index.php?quanly=lienhe">FAQs</a>
                </div>
            </div>
         
        </div>
        <div class="row align-items-center bg-light py-3 px-3">
        <div class="col-lg-4">
    <a href="index.php?quanly=dangky" class="text-decoration-none">
        <h1 class="text-uppercase text-primary">Chào mừng đến với
            <!--   <span h1 class=" text-uppercase text-primary bg-dark px-2">Chào mừng đến với  </h1></span>-->
            <span class="text-uppercase text-dark bg-primary px-2 ml-n1"> J C T melody </span>
        </h1>
    </a>
</div>

            <div class="col-lg-4 col-md-6 col-12 text-center text-md-right">
                
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 text-center text-md-right">
                <p class="m-0">0332467890</p>
                <p class="m-0">0814337854</p>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    
    <div class="container-fluid bg-dark mb-30">
     <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-12">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h2 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Thể Loại</h2>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: 100%; z-index: 999;">
                <div class="navbar-nav w-100">
                    <ul class="list_sidebar">
                        <?php
                            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                            while($row = mysqli_fetch_array($query_danhmuc)){
                        ?>
                        <li class="nav-item nav-link"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
                        <?php
                            }   
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Các phần còn lại của mã PHP của bạn -->
        <?php




            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);

            //////////////////// menu

            ?>


   <div class="col-lg-9 col-md-4 col-sm-6 col-5 pb-1">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                   
   <!-- Button to toggle the navigation menu -->
<button id="menuToggleButton" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-label="Toggle Menu">
  <!-- Icon for the toggle button -->
  <span class="navbar-toggler-icon"></span>
</button>

              
  
                    <div class="collapse navbar-collapse justify-content-left" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                               <li class="nav-item">
                                     <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
                                 </li>
                                 <li class="nav-item"><a class="nav-link" href="index.php?quanly=cacsanpham">Sản phẩm</a></li>
                              <li class="nav-item">
                                    <a class="nav-link" href="index.php?quanly=giohang">Giỏ hàng</a>
                               </li>

                             

                             <li class="nav-item"><a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a></li>

                             
                             <?php

                               
                                if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
                                    // Xóa toàn bộ dữ liệu phiên
                            

                                  
if(isset($_SESSION['dangky'])&& $_SESSION['dangky']!= NULL){
    unset($_SESSION['dangky']);
    echo '<p style="color:red">Bạn đã đăng xuất thành công</p>';
}

                                    // Chuyển hướng về trang chủ
                                //    header("Location: index.php");
                                //     exit; 
                                }
                                ?>


            <?php
            if(isset($_SESSION['dangky'])){ 
                // Người dùng đã đăng nhập
            ?>
                   <!-- <a href="logout.php" class="login-panel noborder"></i>Đăng xuất</a> -->
                    <li class="nav-item"><a class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?quanly=lichsudonhang">Lịch sử đơn hàng</a></li>
                
           <?php
            } else { 
                // Người dùng chưa đăng nhập
            ?>
            <li class="nav-item"><a class="nav-link" href="index.php?quanly=dangky">Đăng ký</a></li>
            <?php
            }
            ?>


                        </ul>
                   
                    </div>
                </nav>
                            </div>
                        </div>
                </div>
           


                        
                        <!-- Carousel Start -->
                      
     
			 