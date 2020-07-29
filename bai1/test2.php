<?php

namespace App\Controller;

require_once "test.php";

use App\Controller\Controller;

class Controller2 extends Controller
{
}



$a = new Controller;
$a->add('ngocbq', 'hà nội', '0902223690', 'ngocbq@gmail.com', 'Đại học');
$a->view();

echo get_class(Controller2::getStatic());
