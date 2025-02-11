
    <!-- header -->
    <?php  
        include_once('layouts/header.php');
        require_once('db/dbhelper.php');
        require_once('utils/utility.php');
        require_once('api/register-form.php');

        if (!empty($nameSearch)){
            echo "<script>
                    var nameSearch = '".addslashes($nameSearch)."';
                    window.location.href = 'home.php?search=' + encodeURIComponent(nameSearch);
                  </script>";
        }
    ?>
    <!-- body -->
    <form method="POST">
        <div class="body">
            <div class="register-container" style="height: 605px;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1 class="text-center">Đăng kí tài khoản người dùng</h1>
                    </div>
                    <div class="panel-body register-body">
                        <div class="form-group">
                          <label for="fullname">Tên người dùng:</label>
                          <input required="true" type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input required="true" type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="phone_number">Số điện thoại:</label>
                          <input type="text" class="form-control" id="phone_number" name="phone_number">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Mật khẩu:</label>
                          <input required="true" type="password" class="form-control" id="pwd" name="pwd">
                        </div>
                        <div class="form-group">
                          <label for="confirmation_pwd">Nhập lại mật khẩu:</label>
                          <input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_pwd">
                        </div>
                        <div class="form-group">
                          <label for="address">Địa chỉ:</label>
                          <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div>
                            <p>Bạn đã có tài khoản? 
                                <a href="login.php">Đăng nhập ngay</a>
                            </p>
                        </div>
                        <button class="btn btn-success btn-register">Đăng kí</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- footer -->
    <?php  
        include_once('layouts/footer.php');
    ?>