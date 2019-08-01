<?php

namespace App\Design\Template;

abstract class AbstractDisplay
{

    public abstract function open();

    public abstract function print();

    public abstract function close();

    public final function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->print();
        }
        $this->close();
    }
}