<?php

namespace App\Design\Observer;

interface  Observer
{


    /**
     * 更新接口
     *
     * @param $newState
     * @return mixed
     */
    public function update($newState);
}
