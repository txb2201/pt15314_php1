<?php
//Tạo mật khẩu được mã hóa
$password = password_hash('123456', PASSWORD_DEFAULT);
echo $password;
