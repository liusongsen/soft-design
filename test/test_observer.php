<?php
include "../vendor/autoload.php";


$observerA = new \App\Design\Observer\ObserverA();
$observerB = new \App\Design\Observer\ObserverA();

$subject = new \App\Design\Observer\ConcreteSubject();
$subject->attach($observerA);
$subject->attach($observerB);

$subject->change("hah");