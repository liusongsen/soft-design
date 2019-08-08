<?php

namespace App\Design\Prototype;

interface Product
{

    public function use($str);

    public function createClone();
}