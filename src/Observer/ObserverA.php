<?php

namespace App\Design\Observer;

class ObserverA implements Observer
{

    private $observerState;

    public function update($newState)
    {
        echo sprintf("SZH,接收到消息：%s 我是A模块，快来抢吧.\n", $newState);
        $this->observerState = $newState;
    }

}