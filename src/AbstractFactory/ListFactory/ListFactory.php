<?php

namespace App\Design\AbstractFactory\Factory;

use App\Design\AbstractFactory\Factory\Factory;

class ListFactory extends Factory
{

    public function createLink($caption, $link)
    {
        return new ListLink($caption,$link);
    }

    public function createTray($caption)
    {
        return new ListTray($caption);
    }

    public function createPage($title, $author)
    {
        return new ListPage($title,$author);
    }
}