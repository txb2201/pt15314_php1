<?php
//Tạo cookie
//setcookie('tên cookie', 'giá trị của cookie', thời gian sống, đường dẫn của cookie)
setcookie('user', 'ngocbq', time() + 60 * 60 * 24, '/');
?>
<a href="user_cookie.php">User cookie</a>