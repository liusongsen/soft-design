<?php

namespace App\Design\AbstractFactory\Factory;


abstract class  Page
{

    protected $title;
    protected $author;
    protected $content;

    public function __construct($title, $author)
    {
        $this->title = title;
        $this->author = $author;
    }

    public function add(Item $item)
    {
        $this->content[] = $item;
    }


    public function output()
    {

        echo sprintf("%s=%s\n", $this->title, $this->makeHtml());

    }


    public abstract function makeHtml();

}