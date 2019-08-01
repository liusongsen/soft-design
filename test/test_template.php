<?php
include "../vendor/autoload.php";


$d1 = new \App\Design\Template\CharDisplay("hello world");
$d2 = new \App\Design\Template\StringDisplay("你好，中国");
echo $d1->display() . "\n";
echo $d2->display() . "\n";