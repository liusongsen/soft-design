<?php

namespace App\Design\Bridge;


class Display
{


    private $imp1;

    /**
     * Display constructor.
     * @param DisplayImp1 $displayImp1
     */
    public function __construct(DisplayImp1 $displayImp1)
    {
        $this->imp1 = $displayImp1;
    }


    /**
     * open
     */
    public function open()
    {
        $this->imp1->rawOpen();
    }

    /**
     * pring
     */
    public function print()
    {
        $this->imp1->rawPrint();
    }

    /**
     * close
     */
    public function close()
    {
        $this->imp1->rawClose();
    }

    /**
     * display
     */
    public final function display()
    {
        $this->open();
        $this->print();
        $this->close();
    }


}