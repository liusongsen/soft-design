<?php
include "../vendor/autoload.php";

use App\Design\Prototype;

$manager = new Prototype\Manager();

$up = new Prototype\UnderlinePen("/");
$mp1 = new Prototype\MessageBox("L");
$mp2 = new Prototype\MessageBox("C");

$manager->register("zhangsan", $up);
$manager->register("lisi", $mp1);
$manager->register("wangwu", $mp2);

$p1 = $manager->create("zhangsan");
$p1->use("hello world");

$p2 = $manager->create("lisi");
$p2->use("Hello World");

$p3 = $manager->create("wangwu");
$p3->use("Hello");