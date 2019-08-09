<?php
include "../vendor/autoload.php";

use \App\Design\Builder;


//表示层
$textBuilder = new Builder\TextBuilder();
$director = new Builder\Director($textBuilder);
//构造层
$director->construct();
$result = $textBuilder->getResult();
echo "textBuilder construct text:" . $result;

$htmlBuilder = new Builder\HtmlBuilder();
$director = new Builder\Director($htmlBuilder);
$director->construct();
$result = $textBuilder->getResult();
echo "htmlBuilder construct text:" . $result;