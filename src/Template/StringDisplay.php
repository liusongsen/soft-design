<?php

namespace App\Design\Template;

class StringDisplay extends AbstractDisplay
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function open()
    {
        echo "###[";
    }

    public function print()
    {
        echo "|" . $this->string . "|";
    }

    public function close()
    {
        echo "###]\n";
    }

}