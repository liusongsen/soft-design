<?php
include "../vendor/autoload.php";


$trans = new \App\Design\Adapter\TransBanner("hello");
echo $trans->printWear() . "\n";
echo $trans->printStrong() . "\n";