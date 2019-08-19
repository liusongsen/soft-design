<?php

namespace App\Design\Strategy;


class Hand
{
    private $handvalue;


    public static $HANDVALUE_GUU = 0; //表示石头的值
    public static $HANDVALUE_CHO = 1; //表示剪刀的值
    public static $HANDVALUE_PAA = 2; //表示布的值

    private static $handValueArr = [];
    private static $handLabelArr = ['石头', '剪刀', '布'];

    /**
     * Hand constructor.
     * @param $handvalue
     */
    public function __construct($handvalue)
    {
        $this->handvalue = $handvalue;
    }

    /**
     * @param $handvalue
     * @return mixed
     */
    public static function getHand($handvalue)
    {
        if (!self::$handValueArr[$handvalue]) {
            self::$handValueArr[$handvalue] = new self($handvalue);
        }
        return self::$handValueArr[$handvalue];
    }


    /**
     * 胜
     *
     * @param Hand $h
     * @return bool
     */
    public function isStrongerThan(Hand $h)
    {
        return $this->fight($h) == 1;
    }

    /**
     * 败
     *
     * @param Hand $h
     * @return bool
     */
    public function isWeakerThan(Hand $h)
    {
        return $this->fight($h) == -1;
    }

    /**
     * 计分
     *
     * @param Hand $h
     * @return int
     */
    private function fight(Hand $h)
    {
        if ($this == h) {
            return 0;
        } elseif (($this->handvalue + 1) % 3 == $h->handvalue) {
            return 1;
        } else {
            return -1;
        }
    }

    /**
     * toString
     *
     * @return mixed
     */
    public function toString()
    {
        return self::$handLabelArr[$this->handvalue];
    }


}