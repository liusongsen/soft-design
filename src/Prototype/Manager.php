<?php

namespace App\Design\Prototype;

class Manager
{

    private $map = [];

    /**
     * register
     *
     * @param $name
     * @param Product $product
     */
    public function register($name, Product $product)
    {
        return $this->map[$name] = $product;
    }

    /**
     * create
     *
     * @param $name
     * @return mixed
     */
    public function create($name)
    {
        if (array_key_exists($name, $this->map)) {
            $p = $this->map[$name];
            return $p->createClone();
        } else {
            return false;
        }
    }
}

