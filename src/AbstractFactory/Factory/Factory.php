<?php

namespace App\Design\AbstractFactory\Factory;


abstract class Factory
{
    /**
     * 通过反射创建对象实例
     *
     * @param $classname
     * @return \ReflectionClass
     * @throws \ReflectionException
     */
    public static function getFactory($classname)
    {
        return \ReflectionClass(get_class($classname))::newInstance();
    }

    /**
     * @param $caption
     * @param $url
     * @return mixed
     */
    public abstract function createLink($caption, $url);

    /**
     * @param $caption
     * @return mixed
     */
    public abstract function createTray($caption);

    /**
     * @param $title
     * @param $author
     * @return mixed
     */
    public abstract function createPage($title, $author);
}