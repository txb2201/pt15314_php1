<?php
session_start();
//Hủy bỏ toàn bộ session đang tồn tại trong phiên làm việc trên trình duyệt
//session_destroy();
unset($_SESSION['email']);
header("Location: user_session.php");
die;
