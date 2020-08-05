<?php
session_start();
//Kiểm xem người dùng đăng nhập chưa
//nếu chưa đăng nhập thì sẽ vào trang login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đây là trang quản trị website</title>
</head>

<body>
    <h1>Trang quản trị website</h1>
</body>

</html>