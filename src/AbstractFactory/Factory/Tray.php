<?php

namespace App\Design\AbstractFactory\Factory;


abstract class Tray extends Item
{
    protected $tray = [];

    public function __construct($caption)
    {
        //todo 注意如果用java来写的话要用关键字super
        parent::__construct($caption);
    }

    /**
     * add
     *
     * @param Item $item
     */
    public function add(Item $item)
    {
        $this->tray[] = $item;
    }


}