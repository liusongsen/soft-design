<?php

namespace App\Design\Adapter;

/**
 * 兼容的接口
 *
 * Class TransBanner
 * @package App\Design\Adapter
 */
class TransBanner extends Banner implements Trans
{

    public function __construct($string)
    {
        parent::__construct($string);
    }

    public function printWear()
    {
        return $this->showWithParen();
    }

    public function printStrong()
    {
        return $this->showWithAster();
    }

}