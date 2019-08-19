<?php

namespace App\Design\Observer;

class ObserverB implements Observer
{

    private $observerState;

    public function update($newState)
    {
        echo sprintf("SZH,接收到消息：%s 我是B模块，快来抢吧.\n", $newState);
        $this->observerState = $newState;
    }

}