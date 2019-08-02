<?php

namespace App\Design\Factory;

class IDCard extends Product
{
    private $owner;

    /**
     * IDCard constructor.
     * @param $owner
     */
    public function __construct($owner)
    {
        echo sprintf("制作%s的ID卡", $owner) . "\n";
        $this->owner = $owner;
    }

    /**
     * use
     *
     * @return mixed|void
     */
    public function use()
    {
        echo sprintf("使用%s的ID卡", $this->owner) . "\n";
    }

    /**
     * getOwner
     *
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

}