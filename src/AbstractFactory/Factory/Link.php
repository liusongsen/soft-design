<?php

namespace App\Design\AbstractFactory\Factory;


abstract class Link extends Item
{
    protected $url;

    public function __construct($caption, $url)
    {
        //todo 注意如果此处用java来写的应该用super关键字
        parent::__construct($caption);
        $this->url = $url;
    }
}