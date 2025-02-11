<?php  
    if (!empty($_POST)){
        $username = $_COOKIE['username'];
        $old_password = getPost('old_password');
        $new_password = getPost('new_password');
        $confirmation_pwd = getPost('confirmation_pwd');

        if ($new_password != $confirmation_pwd){
            echo "<script>alert('Mật khẩu mới và nhập lại mật khẩu không khớp!'); window.location.href = 'change-password.php';</script>";
            exit();
        }
        else
        {
            $sql = "SELECT * FROM users WHERE fullname = '$username' AND password = '$old_password'";
            if (executeResult($sql))
            {
                //update user
                $sql_update = "UPDATE users SET password = '$new_password' WHERE fullname = '$username'";
                if(!execute($sql_update)){
                    echo "<script>alert('Đổi mật khẩu thành công!'); window.location.href = 'home.php';</script>";
                }
                else
                {
                    echo "<script>alert('Có lỗi xảy ra, vui lòng thử lại sau!'); window.location.href = 'change-password.php';</script>";
                }
            }
            else {
                echo "<script>alert('Mật khẩu cũ không đúng!'); window.location.href = 'change-password.php';</script>";
            }
        }
    }

?>