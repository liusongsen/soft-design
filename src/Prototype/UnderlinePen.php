<?php

namespace App\Design\Prototype;
class UnderlinePen implements Product
{
    private $ulchar;

    /**
     * UnderlinePen constructor.
     * @param $ulchar
     */
    public function __construct($ulchar)
    {
        $this->ulchar = $ulchar;
    }

    /**
     * use
     *
     * @param $str
     */
    public function use($str)
    {
        echo sprintf("###%s###\n", $str);
    }

    public function createClone()
    {
        $p = null;
        try {
            $p = clone $this;
            return $p;
        } catch (\Exception $e) {
            echo sprintf("%s\n", $e->getMessage());
        }
    }

}
