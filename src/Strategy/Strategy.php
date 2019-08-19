<?php

namespace App\Design\Strategy;


interface  Strategy
{
    /**
     * @return mixed
     */
    public function nextHand();

    /**
     * @param $win
     * @return mixed
     */
    public function study($win);


}