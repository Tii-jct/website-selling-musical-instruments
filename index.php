<!DOCTYPE html>
<html lang="vi">

<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Mua sắm tại Chi Ti Cao Đẳng Bách Khoa với sự đa dạng và tiện lợi. Hãy mua ngay trước khi hết hàng!">
	<title> Chi Ti cao đẳng bách khoa tây nguyên</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel='canonical' href='https://chiti.dak.edu.vn/' />
</head>


<body>


	<div class="container-fluid">
		<div class="row">
		<?php
		
			session_start();
			include("admincp/config/config.php");
			include("pages/header.php");
		
			include("pages/main.php");
			include("pages/footer.php");
		?>
		</div>
	</div>


</body>
	
</html>