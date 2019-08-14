<?php

namespace App\Design\AbstractFactory\Factory;

use App\Design\AbstractFactory\Factory\Link;

class ListLink extends Link
{

    /**
     * ListLink constructor.
     * @param $caption
     * @param $url
     */
    public function __construct($caption, $url)
    {
        parent::__construct($caption, $url);
    }

    /**
     * makeHtml
     *
     * @return string
     */
    public function makeHtml()
    {
        return "<li><a href='" . $this->url . "'>" . $this->caption . "</a></li>";
    }


}