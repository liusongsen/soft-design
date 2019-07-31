<?php

namespace App\Design\Adapter;

/**
 * 不兼容的接口
 *
 * Class Banner
 * @package App\Design\Adapter
 */
class Banner
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function showWithParen()
    {
        return sprintf("(%s)", $this->string);
    }

    public function showWithAster()
    {
        return sprintf("*%s*", $this->string);
    }


}