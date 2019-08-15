<?php
include "../vendor/autoload.php";


//Display
$d1 = new \App\Design\Bridge\Display(new \App\Design\Bridge\StringDisplayImp1("Hello,China."));
//Display
$d2 = new \App\Design\Bridge\CountDisplay(new \App\Design\Bridge\StringDisplayImp1("Hello,world."));
//CountDisplay
$d3 = new \App\Design\Bridge\CountDisplay(new \App\Design\Bridge\StringDisplayImp1("Hello,Universe."));

$d1->display();
$d2->display();
$d3->display();
$d3->multiDisplay(5);


