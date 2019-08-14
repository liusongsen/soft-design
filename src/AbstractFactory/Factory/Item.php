<?php

namespace App\Design\AbstractFactory\Factory;


abstract class Item
{
    protected $caption;

    public function __construct($caption)
    {
        $this->caption = $caption;
    }

    public abstract function makeHtml();

}