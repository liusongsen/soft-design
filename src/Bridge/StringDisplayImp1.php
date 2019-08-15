<?php

namespace App\Design\Bridge;


/**
 * 强调实现角度的多层次
 *
 * Class StringDisplayImp1
 * @package App\Design\Bridge
 */
class StringDisplayImp1 extends DisplayImp1
{

    private $str;
    private $width;

    /**
     * StringDisplayImp1 constructor.
     * @param $str
     */
    public function __construct($str)
    {
        $this->str = $str;
        $this->width = strlen($str);
    }

    /**
     * printLine
     */
    private function printLine()
    {
        echo "+";
        for ($i = 0; $i < $this->width; $i++) {
            echo "-";
        }
        echo "+\n";
    }

    /**
     * rawOpen
     */
    public function rawOpen()
    {
        $this->printLine();
    }

    /**
     * rawPrint
     */
    public function rawPrint()
    {
        echo sprintf("|%s|", $this->str) . "\n";
    }

    /**
     * rawClose
     */
    public function rawClose()
    {
        $this->printLine();
    }


}