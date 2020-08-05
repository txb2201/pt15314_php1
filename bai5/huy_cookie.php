<?php
//Hủy cookie, cho về thời gian âm
setcookie('user', '', time() - 60 * 60 * 24, '/');

header("Location: user_cookie.php");
