<?php

namespace App\Design\AbstractFactory\Factory;

use App\Design\AbstractFactory\Factory\Page;

class ListPage extends Page
{

    public function __construct($title, $author)
    {
        parent::__construct($title, $author);
    }

    public function makeHtml()
    {
        return "<html><head><title>".$this->title."</title></head>";
    }


}