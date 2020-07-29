<?php
require_once "../connection.php";
//Kiểm tra người dùng nhấn nút lưu thì mới làm việc
if (isset($_POST['btnLuu'])) {
    //var_dump($_FILES['cate_image']);
    $cate_name = $_POST['cate_name'];
    $description = $_POST['description'];
    //Xử lý file upload vào website
    if ($_FILES['cate_image']['size'] > 0) {
        //Trường hợp người dùng nhập ảnh, thì lưu lại tên ảnh vào $cate_image
        $cate_image = $_FILES['cate_image']['name'];
    } else {
        //Trường hợp người dùng không nhập ảnh
        $cate_image = "";
    }
    //Viết câu lệnh sql
    $sql = "INSERT INTO categories(cate_name, cate_image, description) VALUES('$cate_name', '$cate_image', '$description')";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    if ($stmt->execute()) {
        //Nếu $cate_image không rỗng thì upload ảnh vào thư mục images
        if (!empty($cate_image)) {
            move_uploaded_file($_FILES['cate_image']['tmp_name'], "../images/" . $cate_image);
        }
        header("location: danhmuc.php?message=Thêm dữ liệu thành công");
        die;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
</head>

<body>
    <h2>Thêm danh mục sản phẩm</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Tên danh mục</label>
        <br>
        <input type="text" name="cate_name" id="">
        <br>
        <label for="">Hình ảnh</label>
        <br>
        <input type="file" name="cate_image" id="">
        <br>
        <label for="">Mô tả</label>
        <br>
        <textarea name="description" id="" cols="130" rows="10"></textarea>
        <br>
        <button type="submit" name="btnLuu">Lưu</button>
    </form>
</body>

</html>