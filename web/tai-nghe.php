<!-- header -->
<?php  
    require_once('db/dbhelper.php');
    require_once('utils/utility.php');
    include_once('layouts/header.php');

    $productList = executeResult("SELECT * FROM products WHERE title LIKE '%tai nghe%'");
?>

<!-- body -->
<div class="container">
    <!-- Advertisement Image -->
    <div class="top-advertisement">
        <img src="./assets/img/Advertisement.png" alt="Advertisement Image" class="top-ad-img">
    </div>
    <div class="row">
        <!-- Left Column: Categories and Advertisement -->
        <div class="col-md-2 col-12">
            <!-- Categories List -->
            <div class="categories left-sidebar">
                <h5>Danh mục</h5>
                <ul>
                    <li><a href="cap-sac.php">Cáp, sạc</a></li>
                    <li><a href="op-lung.php">Ốp lưng</a></li>
                    <li><a href="the-nho.php">Thẻ nhớ</a></li>
                    <li><a href="pin-du-phong.php">Pin dự phòng</a></li>
                    <li><a href="dan-man-hinh.php">Dán màn hình</a></li>
                    <li><a href="tai-nghe.php">Tai nghe</a></li>
                </ul>
            </div>
        </div>
        <!-- Right Column: Product List -->
        <div class="col-md-10 col-12">
            <div class="row">
                <?php  
                    if (!empty($nameSearch)){
                        showSearch($nameSearch);
                    } else {
                        foreach ($productList as $item) {
                            echo '<div class="col-md-4 col-6 box-product">
                                    <a href="detail.php?id='.$item['id'].'"> 
                                        <img class="img" src="'.$item['thumbnail'].'" alt="Product Image">
                                        <p class="product-title">'.$item['title'].'</p>
                                    </a>
                                    <p class="price">'.number_format($item['price'], 0, ',', ' ') .' '. '<span class="currency">đ</span>' . '</p>
                                  </div>';
                        }
                    }
                ?>
            </div>
        </div>

    </div>
</div>
<!-- footer -->
<?php  
    include_once('layouts/footer.php');
?>