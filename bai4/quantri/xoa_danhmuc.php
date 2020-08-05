<?php
require_once "../connection.php";

//Lấy cate_id từ URL
$cate_id = $_GET['id'];
//Viết câu lệnh SQL DELETE
$sql = "DELETE FROM categories WHERE cate_id=$cate_id";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi
if ($stmt->execute()) {
    header("location: danhmuc.php?message=Xóa dữ liệu thành công");
    die;
} else {
    header("location: danhmuc.php?message=Xóa dữ liệu thất bại!!!");
    die;
}
