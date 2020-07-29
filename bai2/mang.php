<?php
//Khai báo mảng
$arr = [
    1, 2, 13.5, 'hello', 'nguyễn văn an', 'annv@gmail.com'
];
echo $arr[4]; //Truy cập phần tử thứ có index là 4
$arr[0] = 'Đào văn anh'; //Thay thế phần tử đầu tiên

print_r($arr);

//Mang nhiều chiều
$arr2 = [
    [1, 2, 13.5, 'Nông văn dền', 'dennv@gmail.com', '0989011111'],
    ['nguyễn văn nam', 'Hà nội', 'namnv@gmail.com']
];
//Lấy ra email của mảng số 2
echo "<br>" . $arr2[1][2];

//Mảng có khóa và giá trị
$arr3 = [
    'name' => 'Trần văn long',
    'email' => 'longtv@gmail.com',
    'address' => 'Hà nội'
];
echo "<br>" . $arr3['email'];

//foreach Truy cập mảng 1 chiều
foreach ($arr as $item) {
    echo "Phần tử: $item<br>";
}

//Foreach truy cập mảng 2 chiều
foreach ($arr2 as $items) {
    foreach ($items as $item) {
        echo "Phần tử $item<br>";
    }
}
//Truy cập mảng có khóa và phần tử
foreach ($arr3 as $k => $v) {
    echo "Key: $k, Value: $v <br>";
}
