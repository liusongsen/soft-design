<?php

namespace App\Design\Bridge;

/**
 * 表示功能角度的多层次
 *
 * Class CountDisplay
 * @package App\Design\Bridge
 */
class CountDisplay extends Display
{

    /**
     * CountDisplay constructor.
     * @param DisplayImp1 $displayImp1
     */
    public function __construct(DisplayImp1 $displayImp1)
    {
        parent::__construct($displayImp1);
    }

    /**
     * 表示类的功能层次结构
     *
     * @param $times
     */
    public function multiDisplay($times)
    {
        $this->open();
        for ($i = 0; $i < $times; $i++) {
            $this->print();
        }
        $this->close();
    }


}