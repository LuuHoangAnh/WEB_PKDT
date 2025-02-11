    <!-- header -->
    <?php  
        require_once('db/dbhelper.php');
        require_once('utils/utility.php');
        include_once('layouts/header.php');

        $cart = [];
        if (isset($_COOKIE['cart'])){
            $json = $_COOKIE['cart'];
            $cart = json_decode($json, true);
        }

        $idList = [];
        foreach ($cart as $item) {
            $idList[] = $item['id'];
        }
        if (count($idList) > 0){
            $idList = implode(',', $idList);

            $sql = "select * from products where id in ($idList)";
            $cartList = executeResult($sql);
        }
        else{
            $cartList = [];
        }

        if (!empty($nameSearch)){
            echo "<script>
                    var nameSearch = '".addslashes($nameSearch)."';
                    window.location.href = 'home.php?search=' + encodeURIComponent(nameSearch);
                  </script>";
        }
    ?>

    <!-- body -->
    <div class="container">
        <div class="row-cart cart-body">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Num</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $count = 0;
                            $total = 0;
                            foreach ($cartList as $item) {
                                $num = 0;
                                foreach ($cart as $value) {
                                    if ($value['id'] == $item['id'])
                                    {
                                        $num += $value['num'];
                                        break;
                                    }
                                }
                                $total += $num*$item['price'];
                                echo '<tr>
                                        <td>'.(++$count).'</td>
                                        <td><img src="'.$item['thumbnail'].'" style="height: 100px"></td>
                                        <td>'.$item['title'].'</td>
                                        <td>'.$num.'</td>
                                        <td>'.number_format($item['price'], 0, ',', ' ').'</td>
                                        <td>'.number_format($num*$item['price'], 0, ',', ' ').'</td>
                                        <td><button class="btn btn-danger" onclick="deleteCart('.$item['id'].')">Delete</button></td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
                <p style="font-size: 30px; color: red;">
                    Total: <?=number_format($total, 0, ',', '.')?>
                </p>

                <button class="btn btn-success" style="font-size: 32px;" onclick="checkLogin()">Checkout</button>
            </div>
        </div>
    </div>

    <!-- Modal yêu cầu đăng nhập -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h3>Vui lòng đăng nhập để tiếp tục.</h3>
            <button class="btn btn-primary" onclick="window.location.href='login.php'">Đăng nhập</button>
        </div>
    </div>

    <script type="text/javascript">
        function deleteCart(id){
            $.post('api/cookie.php', {
                'action': 'delete',
                'id': id
            }, function(data){
                location.reload();
            })
        }

        function openModal() {
            document.getElementById("loginModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("loginModal").style.display = "none";
        }

        function checkLogin() {
            const isLoggedIn = document.cookie.split('; ').find(row => row.startsWith('username='));

            if (isLoggedIn) {
                window.location.href = 'checkout.php';
            } else {
                openModal(); // Mở modal nếu chưa đăng nhập
            }
        }

        /*function checkLogin() {
            // Kiểm tra cookie 'username' để xem người dùng đã đăng nhập chưa
            const isLoggedIn = document.cookie.split('; ').find(row => row.startsWith('username='));

            if (isLoggedIn) {
                // Nếu đã đăng nhập, chuyển hướng đến trang checkout
                window.location.href = 'checkout.php';
            } else {
                // Nếu chưa đăng nhập, hiển thị thông báo yêu cầu đăng nhập
                alert("Vui lòng đăng nhập để tiếp tục.");
                window.location.href = 'login.php';
            }
        }*/
    </script>

    <!-- footer -->
    <?php  
        include_once('layouts/footer.php');
    ?>