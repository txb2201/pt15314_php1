<?php
$x = 5;
//Phát biểu if else
if ($x > 5) {
    echo "Số $x > 5";
} else if ($x == 5) {
    echo "Số $x = 5";
} else {
    echo "Số $x < 5";
}

//Phát biểu switch case
switch ($x) {
    case 1:
        echo "bạn chọn chương trình 1";
        break;
    case 3:
        echo "bạn chọn chương trình 3";
        break;
    case 5:
        echo "bạn chọn chương trình 5";
        break;
    default:
        echo "bạn chọn chương trình không đúng";
        break;
}
