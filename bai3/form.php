<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['btnGui'])) {
        if (isset($_POST['thanhpho'])) {
            $thanhpho = $_POST['thanhpho'];
            var_dump($thanhpho);
        } else {
            echo "Bạn cần chọn";
        }
    }
    ?>
    <form action="" method="post">
        <select name="thanhpho[]" multiple="4" id="">
            <option value="HN">Hà nội</option>
            <option value="HUE">Huế</option>
            <option value="HP">Hải phòng</option>
            <option value="NT">Nha trang</option>
            <option value="HCM">Hồ chí minh</option>
            <option value="DN">Đà nẵng</option>
            <option value="KH">Khánh hòa</option>
        </select>
        <br>
        <button type="submit" name="btnGui">Gửi</button>
    </form>
</body>

</html>