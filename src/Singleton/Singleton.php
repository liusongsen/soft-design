<?php

namespace App\Design\Singleton;

class Singleton
{

    private static $instance;

    /**
     * Singleton constructor.
     * @param $dsn
     */
    public function __construct($dsn)
    {
        echo sprintf("我就是我%s\n", $dsn);
    }


    /**
     * getInstance
     *
     * @param $dsn
     * @return mixed
     */
    public static function getInstance($dsn)
    {
        if (!self::$instance[$dsn]) {
            self::$instance[$dsn] = new Singleton($dsn);
        }
        return self::$instance[$dsn];
    }


}