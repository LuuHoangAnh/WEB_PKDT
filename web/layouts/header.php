<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        /* =========================COMMON======================== */
        .container .row{
            margin-top: 20px;
            min-height: 500px;
        }
        /* =========================HOME======================== */
        /*-------top-------*/
        .top-advertisement{
            width: 100%;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .top-ad-img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        #ad-image {
            width: auto;
            height: 500px;
            object-fit: contain;
        }
        /*-------body--------*/
        /*---------right-------*/
        /*.box-product{
            background: #fff;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #000;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
        }*/

        .box-product {
            text-align: center;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            transition: box-shadow 0.3s;
        }

        .box-product:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .box-product .img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /*.box-product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }*/

        .box-product p {
            text-align: center;
            margin: 5px 0;
            display: -webkit-box;
            -webkit-line-clamp: 1; /* Giới hạn hiển thị 2 dòng */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .box-product a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .box-product .price{
            font-size: 14px;
            color: #e74c3c;
            font-weight: bold;
        }

        .currency {
            text-decoration: underline;
        }
        /*---------left-------*/
        .left-sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            position: sticky;
            top: 60px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .categories h5 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .categories ul {
            list-style-type: none;
            padding: 0;
        }

        .categories ul li {
            margin-bottom: 10px;
        }

        .categories ul li a {
            color: #007bff;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 5px;
            display: block;
            border-radius: 4px;
        }

        .categories ul li a:hover {
            text-decoration: underline;
            text-decoration: underline;
            background-color: #e2e6ea;
            transform: scale(1.05);
        }

        /* =========================DETAIL======================== */
        .container-detail{
            margin-top: 20px;
        }
        .product-detail{
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .product-detail .col-md-5 img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .product-detail-right{
            display: flex;
            flex-direction: column;
        }

        .product-detail-right h4 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-detail-right p{
            font-size: 20px;
            color: #d9534f;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .product-infomation {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        #quantity {
            padding: 5px;
            font-size: 16px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 60px;
        }

        .title-quantity{
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .btn-success:hover {
            background-color: #4cae4c;
            border-color: #4cae4c;
        }

        .product-detail-right button{
            font-size: 20px; 
            margin-top: 50px; 
            width: 100%;
        }
        /* =========================CART======================== */
        .cart-body{
            margin-top: 30px;
            background: #fff;
            border: 1px solid #000;
            display: flex;
        }

        .container .row-cart{
            min-height: 500px;
        }
        /*---------table----------*/
        .table-bordered {
            border: 1px solid #ddd;
        }

        .table thead th {
            background-color: #f7f7f7;
            color: #333;
            font-weight: bold;
            text-align: center;
        }

        .table tbody td {
            text-align: center;
            vertical-align: middle;
        }

        .btn-danger, .btn-success {
            font-size: 16px;
            padding: 8px 16px;
            border-radius: 4px;
        }
        /*-------button------*/
        .btn-danger {
            background-color: #d9534f;
            border-color: #d43f3a;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c9302c;
            border-color: #ac2925;
        }

        .btn-success {
            margin-top: 30px;
            background-color: #5cb85c;
            border-color: #4cae4c;
            color: white;
            min-width: 100%;
        }

        .btn-success:hover {
            background-color: #4cae4c;
            border-color: #398439;
        }

        .cart-body p {
            margin-top: 50px;
            font-weight: bold;
            color: #d9534f;
        }

        /* Modal background */
        .modal {
            display: none; /* Ẩn modal mặc định */
            position: fixed;
            z-index: 1000;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6); /* Làm mờ nền */
        }

        /* Modal content box */
        .modal-content {
            background-color: #fff;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            width: 30%;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Close button */
        .close-btn {
            color: #888;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #555;
        }

        /* Button inside modal */
        .modal-content .btn-primary {
            background-color: #5cb85c;
            border: none;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        .modal-content .btn-primary:hover {
            background-color: #4cae4c;
        }
        /* =========================LOGIN======================== */
        #login-title {
          text-align: center;
        }

        .login-container{
            margin-top: 100px;
        }

        .form-group {
          max-width: 550px;
          margin: auto; 
        }

        .login_body .btn-login{
           display: flex;
           margin: 50px auto;
        }
        /* =========================REGISTER======================== */
        .register-body {
            max-width: 550px;
            margin: 50px auto; 
        }

        .register-body .btn-register {
            display: flex;
            margin: 50px auto;
        }
        /*=============================HEADER==========================*/
        .btn-group .btn-outline-info {
            color: #17a2b8;
            font-weight: bold;
            border-color: #17a2b8;
        }

        .btn-group .btn-outline-info:hover {
            background-color: #17a2b8;
            color: #fff;
        }

        .dropdown-menu .dropdown-item {
            font-size: 0.9rem;
            color: #333;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #17a2b8;
        }
        /*============================FOOTER===========================*/
        .footer {
          margin-top: 100px;
          padding-top: 100px;
          background: #10375c;
          font-family: "Open Sans", sans-serif;
        }

        .footer__top {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
          column-gap: 78px;
        }

        .footer__link {
            text-decoration: none;
        }

        .footer__desc {
          margin-top: 21px;
          color: #a9b3bb;
          font-size: 1.6rem;
          line-height: 1.75; /* 175% */
        }

        .footer__heading {
          color: #fff;
          font-size: 1.6rem;
          font-weight: 600;
          line-height: 1.75; /* 175% */
        }

        .footer__list {
          margin: 20px 0 28px;
        }

        .footer__link {
          color: #a9b3bb;
          font-size: 1.4rem;
          line-height: 1.86; /* 185.714% */
          white-space: nowrap;
        }

        .footer__link:hover {
          text-decoration: underline;
        }

        .footer__item {
          margin-bottom: 10px;
        }

        .footer__social {
          display: flex;
          margin: 20px 0 28px;
          column-gap: 10px;
        }

        .footer__social-btn {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 32px;
          height: 32px;
          border-radius: 50%;
          background: #fff;
          color: #2e80ce;
          transition: 0.25s;
        }

        .footer__social-btn:hover {
          background: #2e80ce;
          color: #fff;
        }
    </style>
	<title>Web bán phụ kiện di động</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>
	<!-- header -->
	<div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LovePhone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="cap-sac.php">Cáp, sạc</a></li>
                                <li><a class="dropdown-item" href="op-lung.php">Ốp lưng</a></li>
                                <li><a class="dropdown-item" href="the-nho.php">Thẻ nhớ</a></li>
                                <li><a class="dropdown-item" href="pin-du-phong.php">Pin dự phòng</a></li>
                                <li><a class="dropdown-item" href="dan-man-hinh.php">Dán màn hình</a></li>
                                <li><a class="dropdown-item" href="tai-nghe.php">Tai nghe</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php  
                        $cart = [];
                        if (isset($_COOKIE['cart'])){
                            $json = $_COOKIE['cart'];
                            $cart = json_decode($json, true);
                        }
                        $count = 0;
                        foreach ($cart as $item) {
                            $count += $item['num'];
                        }
                    ?>

                    <a href="cart.php" style="color: white; text-decoration: none;">
                        <button type="button" class="btn btn-primary" style="position: absolute; right: 50%;">
                        Giỏ hàng<span class="badge badge-light"><?=$count?></span>
                    </a>

                    </button>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Bạn cần tìm gì?" aria-label="Search" 
                        name="search">
                        <button class="btn btn-outline-success" type="submit" onclick="showSearch()">Tìm kiếm</button>
                    </form>
                    <?php if (isset($_COOKIE['username'])): ?>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= htmlspecialchars($_COOKIE['username']); ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">      
                                <li><a class="dropdown-item" href="change-password.php">Lịch sử giao dịch</a></li>
                                <li><a class="dropdown-item" href="change-password.php">Đổi mật khẩu</a></li>
                                <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div class="btn">
                            <a href="login.php">
                                <button class="btn btn-danger">Đăng nhập</button>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>   
    </div>
    <div class="mes-bottom">
        <a href="https://www.facebook.com/hoanganh.luu.14019">
            <i class="fa-brands fa-facebook-messenger"></i>
        </a>

        <button id="backToTop" onclick="scrollToTop()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 17" fill="var(--neutral-gray-5)" style="display: inline-block;">
                <path d="M2.86201 10.9717C3.12236 11.2321 3.54447 11.2321 3.80482 10.9717L8.00008 6.77647L12.1953 10.9717C12.4557 11.2321 12.8778 11.2321 13.1382 10.9717C13.3985 10.7114 13.3985 10.2893 13.1382 10.0289L8.47149 5.36225C8.21114 5.1019 7.78903 5.1019 7.52868 5.36225L2.86201 10.0289C2.60166 10.2893 2.60166 10.7114 2.86201 10.9717Z" fill="currentColor">
                </path>
            </svg>
        </button>  
    </div>

    <script type="text/javascript">
        // Hiển thị nút khi cuộn xuống 100px
        window.onscroll = function() {
            const backToTopButton = document.getElementById("backToTop");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };
        
        function scrollToTop(){
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>

	<script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

<?php 
    $nameSearch = isset($_GET['search']) ? $_GET['search'] : ''; 

        function showSearch($nameSearch){
            $searchProduct = executeResult("SELECT * FROM products WHERE title LIKE '%$nameSearch%'");
            foreach ($searchProduct as $item) {
                echo '<div class="col-md-3 col-6 box-product">
                           <a href="detail.php?id='.$item['id'].'"> 
                                <img class="img" src="'.$item['thumbnail'].'" style="width:100%"> 
                                <p>'.$item['title'].'</p>
                            </a>
                            <p class="price">'.number_format($item['price'], 0, ',', ' ') .' '. '<span style="text-decoration: underline;">đ</span>' . '</p>
                        </div>';
                    }

        }
?>