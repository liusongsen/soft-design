<?php

namespace App\Design\Builder;

class Director
{

    private $builder;

    /**
     * Director constructor.
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * construct
     */
    public function construct()
    {
        $this->builder->makeTitle("Greeting");
        $this->builder->makeString("从早上至下午");
        $this->builder->makeItems(['早上好。', '下午好。']);
        $this->builder->makeString("晚上");
        $this->builder->makeItems([
            '晚上好。',
            '晚安。',
            '再见。'
        ]);
        $this->builder->close();
    }
}