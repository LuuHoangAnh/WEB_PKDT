    <!-- header -->
    <?php  
        require_once('db/dbhelper.php');
        require_once('utils/utility.php');

        require_once('api/checkout-form.php');
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
    ?>

    <!-- body -->
    <form method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>THÔNG TIN GIAO HÀNG</h3>
                    <div class="form-group">
                      <label for="usr">Name:</label>
                      <input required="true" type="text" class="form-control" id="usr" name="fullname">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <!-- <input required="true" type="email" class="form-control" id="email" name="email"> -->
                      <input required type="email" class="form-control" id="email" name="email" 
                     value="<?= isset($_COOKIE['emailuser']) ? htmlspecialchars($_COOKIE['emailuser']) : ''; ?>">
                    </div>
                    <div class="form-group">
                      <label for="phone_number">Phone Number:</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number">
                    </div>
                    <div class="form-group">
                      <label for="address">Address:</label>
                      <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                      <label for="note">Note:</label>
                      <textarea type="text" class="form-control" rows="3" id="note" name="note"></textarea>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3>GIỎ HÀNG</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Thumbnail</th>  
                                <th>Title</th>
                                <th>Num</th>
                                <th>Price</th>
                                <th>Total</th>
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
                                        </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-size: 30px; color: red;">
                        Total: <?=number_format($total, 0, ',', '.')?>
                    </p>

                    <a href="checkout.php">
                        <button class="btn btn-success" style="font-size: 32px;">Complete</button>
                    </a>
                </div>
                </form>
            </div>
        </div>
    </form>
    <!-- footer -->
    <?php  
        include_once('layouts/footer.php');
    ?>