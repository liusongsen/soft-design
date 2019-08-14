<?php

namespace App\Design\AbstractFactory\Factory;

use App\Design\AbstractFactory\Factory\Tray;

class ListTray extends Tray
{

    /**
     * ListTray constructor.
     * @param $caption
     */
    public function __construct($caption)
    {
        parent::__construct($caption);
    }


    public function makeHtml()
    {
        return "<ul><li>" . implode("</li><li>", array_map(function ($o) {
                return $o->makeHTML();
            }, $this->tray)) . "</li></ul>";
    }


}