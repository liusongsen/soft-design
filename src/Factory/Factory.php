<?php

namespace App\Design\Factory;

abstract class Factory
{

    /**
     * create
     *
     * @param $owner
     * @return mixed
     */
    public final function create($owner)
    {
        $p = $this->createProduct($owner);
        $this->registerProduct($p);
        return $p;

    }

    /**
     * createProduct
     *
     * @param $owner
     * @return mixed
     */
    protected abstract function createProduct($owner);

    /**
     * registerProduct
     *
     * @param Product $product
     * @return mixed
     */
    protected abstract function registerProduct(Product $product);
}