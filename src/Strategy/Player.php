<?php

namespace App\Design\Strategy;


class Player
{
    private $name;
    private $strategy;
    private $winCount;
    private $loseCount;
    private $gameCount;

    /**
     * Player constructor.
     * @param $name
     * @param $strategy
     */
    public function __construct($name, Strategy $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    public function nextHand()
    {
        return $this->strategy->nextHand();
    }

    public function win()
    {
        $this->strategy->study(true);
        $this->winCount++;
        $this->gameCount++;
    }

    public function lose()
    {
        $this->strategy->study(false);
        $this->loseCount++;
        $this->gameCount++;
    }

    public function even()
    {
        $this->gameCount++;
    }

    public function toString()
    {
        return sprintf("%s:gameCount:%d winCount:%d loseCount: %d", $this->name, $this->gameCount, $this->winCount, $this->loseCount);
    }

}