<?php

namespace App\Design\Prototype;
class MessageBox implements Product
{
    private $decochar;

    /**
     * MessageBox constructor.
     * @param $decochar
     */
    public function __construct($decochar)
    {
        $this->decochar = $decochar;
    }

    /**
     * use
     *
     * @param $str
     */
    public function use($str)
    {
        echo sprintf("====%s====\n", $str);
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
