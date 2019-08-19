<?php

namespace App\Design\Observer;


use App\Design\Observer\Observer;

class Subject
{

    private $myObservers = [];


    /**
     * 注册观察者对象
     *
     * @param Observer $observer
     * @return int
     */
    public function attach(Observer $observer)
    {
        echo sprintf("注册观察者对象\n");
        return array_push($this->myObservers, $observer);
    }

    /**
     * 注销观察者对象
     *
     * @param Observer $observer
     */
    public function detach(Observer $observer)
    {
        echo sprintf("注销观察者对象\n");
        unset($this->myObservers[array_search($observer, $this->myObservers)]);
    }


    /**
     * 通知所有注册的观察者对象
     *
     * @param $newState
     */
    public function notifyEventOne($newState)
    {
        foreach ($this->myObservers as $observer) {
            $observer->update($newState);
        }
    }

}