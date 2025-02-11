<?php  
    session_start(); //new
    if (!empty($_POST))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        //tao ket noi
        $con = mysqli_connect('localhost', 'root', '', 'web_ban_pk');
        //cho phep PHP luu unicode utf8 database
        mysqli_set_charset($con, "utf8");

        if ($con->connect_error){
            var_dump($con->connect_error);
            die();
        }

        $sql = "SELECT * FROM users WHERE EMAIL = '".$email."' AND PASSWORD = '".$pass."' ";
        $result = mysqli_query($con, $sql);
        $data = array();
        while ($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row; 
        }

        mysqli_close($con);

        if ($data != null && count($data) > 0)
        {
            // $_SESSION['fullname'] = $data['fullname']; //new
            setcookie("username", $data[0]['fullname'], time() + (86400 * 3), "/"); //new cookie ton tay trong 3d
            setcookie("emailuser", $data[0]['email'], time() + (86400 * 3), "/");
            header("Location: home.php");
            exit();
        }
        else
            echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu!')</script>";
    }
?>

    <!-- header -->
    <?php  
        include_once('layouts/header.php');

        if (!empty($nameSearch)){
            echo "<script>
                    var nameSearch = '".addslashes($nameSearch)."';
                    window.location.href = 'home.php?search=' + encodeURIComponent(nameSearch);
                  </script>";
        }
    ?>
    <!-- body -->
    <div class="login-body" style="height: 505px;">
        <div class="login-container">
            <div class="login_header">
                <img src="" alt="">
                <h1 id="login-title">Đăng nhập</h1>
            </div>
            <div class="login_body">
                <form method="POST" action="login.php">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" placeholder="Nhập email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Mật khẩu:</label>
                    <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password">
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Ghi nhớ mật khẩu
                    </label>
                    <label style="margin-left: 100px;">Bạn chưa có tài khoản?</label>
                    <a href="register.php">Đăng ký ngay</a>
                  </div>
                  <button type="submit" class="btn btn-primary btn-login">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- footer -->
    <?php  
        include_once('layouts/footer.php');
    ?>