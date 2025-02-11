    <!-- header -->
    <?php  
        require_once('db/dbhelper.php');
        require_once('utils/utility.php');
        include_once('layouts/header.php');

        if (!empty($nameSearch)){
            echo "<script>
                    var nameSearch = '".addslashes($nameSearch)."';
                    window.location.href = 'home.php?search=' + encodeURIComponent(nameSearch);
                  </script>";
        }

        $id = getGet('id');
        $product = executeResult('select * from products where id = '.$id, true);
        if ($product == null)
        {
            header('Location: home.php');
            die();
        }
    ?>

    <!-- body -->
    <div class="container container-detail">
        <div class="row product-detail">
            <!-- left -->
            <div class = "col-md-5">
                <img src="<?=$product['thumbnail']?>">
            </div>
            <!-- right -->
            <div class="col-md-6 product-detail-right">
                <h4><?=$product['title']?></h4>
                <p>
                    <?= number_format($product['price'], 0, ',', ' ') ?>
                    <span style="text-decoration: underline;">đ</span>
                </p>
                <div class="product-infomation">
                    <?=$product['content']?>
                </div>
                <label for="quantity" class="title-quantity">Số lượng:</label>
                <input type="number" id="quantity" value="1" min="1" style="width: 60px; margin-right: 10px;">
                <button class="btn btn-success" onclick="addToCart(<?=$id?>)">Thêm vào giỏ hàng</button>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function addToCart(id){
            var quantity = document.getElementById('quantity').value;
            $.post('api/cookie.php', {
                'action': 'add',
                'id': id,
                'num': quantity
            }, function(data){
                location.reload();
            })
        }
    </script>

    <!-- footer -->
    <?php  
        include_once('layouts/footer.php');
    ?>