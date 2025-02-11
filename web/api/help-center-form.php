<?php  
    if (!empty($_POST)){

        $title = getPost('title');
        $fullname = getPost('fullname');
        $email = getPost('email');
        $content = getPost('content');

        $sql = "insert into help_center(title, fullname, email, content) values
        ('$title', '$fullname', '$email', '$content')";
        execute($sql);
        echo "<script>
                alert('Gửi góp ý thành công!');
                window.location.href = 'home.php';
            </script>";
    }

?>