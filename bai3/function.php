<?php
//Hàm tính giai thừa
function giai_thua($n)
{
    $gt = 1;
    for ($i = 2; $i <= $n; $i++) {
        $gt *= $i;
    }
    return $gt;
}

//Hàm kiểm tra số nguyên tố
function kiem_tra_so_nguyen_to($n)
{
    //Đặt biến kiểm tra là true, có nghĩa là giả sử rằng số là số nguyên tố
    $kt = true;
    //Chứng mình minh xem số đó có thực là số nguyên tố không
    if ($n < 2) {
        $kt = false;
    } else {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                $kt = false;
                break;
            }
        }
    }
    return $kt;
}
