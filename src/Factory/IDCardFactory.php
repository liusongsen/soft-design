<?php

namespace App\Design\Factory;

class IDCardFactory extends Factory
{

    private $owners = [];

    /**
     * createProduct
     *
     * @param $owner
     * @return IDCard|mixed
     */
    protected function createProduct($owner)
    {
        return new IDCard($owner);
    }

    /**
     * @param Product $product
     * @return array|mixed
     */
    protected function registerProduct(Product $product)
    {
        array_push($this->owners, $product);
        return $this->getOwners();
    }

    /**
     * getOwners
     *
     * @return array
     */
    public function getOwners()
    {
        return $this->owners;
    }
}