<?php
include "../vendor/autoload.php";


$factory = new \App\Design\Factory\IDCardFactory();
$p1 = $factory->create("小红");
$p2 = $factory->create("小明");
$p3 = $factory->create("小刘");

$p1->use();
$p2->use();
$p3->use();
