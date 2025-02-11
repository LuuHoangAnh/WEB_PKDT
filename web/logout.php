<?php
setcookie("username", "", time() - 3600, "/"); // Xóa cookie bằng cách đặt thời gian hết hạn trong quá khứ
header("Location: home.php"); // Chuyển hướng về trang chủ
exit();
?>