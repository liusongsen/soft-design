<?php
include "../vendor/autoload.php";

use App\Design\Singleton\Singleton;


Singleton::getInstance("instance1");
Singleton::getInstance("instance1");
Singleton::getInstance("instance2");
Singleton::getInstance("instance2");

