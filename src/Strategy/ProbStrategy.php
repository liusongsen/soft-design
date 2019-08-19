<?php

namespace App\Design\Strategy;


class   ProbStrategy implements Strategy
{
    private $random;
    private $won = false;
    private $prevHand;

    /**
     * WinningStrategy constructor.
     * @param $seed
     */
    public function __construct($seed)
    {
        $this->random = $seed;
    }

    /**
     * @return mixed
     */
    public function nextHand()
    {
        if (!$this->won) {
            $this->prevHand = Hand::getHand($this->random);
        }
        return $this->prevHand;
    }

    /**
     * @param $win
     * @return mixed|void
     */
    public function study($win)
    {
        $this->won = $win;
    }


}