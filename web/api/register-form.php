<?php  
    if (!empty($_POST)){

        $fullname = getPost('fullname');
        $email = getPost('email');
        $pwd = getPost('pwd');
        $confirmation_pwd = getPost('confirmation_pwd');
        $phone_number = getPost('phone_number');
        $address = getPost('address');

        /*if ($pwd == ' ' || $confirmation_pwd == ' ')
        {
            echo "<script>alert('Mật khẩu không được có khoảng trắng!')</script>";
        }
        else
        {  
            if ($pwd != $confirmation_pwd){
            echo "<script>alert('Mật khẩu không khớp nhau!')</script>";
            }
            else
            {
                //add user
                $sql = "insert into users(fullname, email, phone_number, password, address) values
                ('$fullname', '$email', '$phone_number', '$pwd', '$address')";
                execute($sql);

                echo "<script>
                        alert('Đăng kí thành công!');
                        window.location.href = 'login.php';
                    </script>";
            }
        }
*/
        if ($pwd != $confirmation_pwd){
            echo "<script>alert('Mật khẩu không khớp nhau!')</script>";
        }
        else
        {
            //add user
            $sql = "insert into users(fullname, email, phone_number, password, address) values
            ('$fullname', '$email', '$phone_number', '$pwd', '$address')";
            execute($sql);

            echo "<script>
                    alert('Đăng kí thành công!');
                    window.location.href = 'login.php';
                </script>";
        }
    }

?>