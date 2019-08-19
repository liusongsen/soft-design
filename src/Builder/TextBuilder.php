<?php

namespace App\Design\Builder;

class TextBuilder extends Builder
{
    private $buffer = "";

    /**
     * makeTitle
     *
     * @param $title
     */
    public function makeTitle($title)
    {
        $this->buffer .= "======\n";
        $this->buffer .= "[" + $title + "]\n";
        $this->buffer .= "\n";
    }

    /**
     * makeString
     *
     * @param $str
     */
    public function makeString($str)
    {
        $this->buffer .= "【" . $str . "】\n";
        $this->buffer .= "\n";
    }

    /**
     * makeItems
     *
     * @param array $items
     */
    public function makeItems($items = [])
    {
        foreach ($items as $item) {
            $this->buffer .= "." . $item . "\n";
        }
        $this->buffer .= "\n";
    }

    /**
     *close
     */
    public function close()
    {
        $this->buffer .= "======\n";
    }

    /**
     * getResult
     *
     * @return string
     */
    public function getResult()
    {
        return $this->buffer;
    }

}