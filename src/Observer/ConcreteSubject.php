<?php

namespace App\Design\Observer;


use App\Design\Observer\Observer;

class ConcreteSubject extends Subject
{

    private $state;

    public function getState()
    {
        return $this->state;
    }

    public function change($newState)
    {
        $this->state = $newState;
        echo sprintf("SZH,接收到消息：%s.\n", $newState);
        $this->notifyEventOne($newState);
    }

}