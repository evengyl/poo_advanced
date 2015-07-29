<?php

namespace Evengyl;


Class AutoLoader
{
    /**
     * @param $name_class
     */
    static function autoload($name_class)
    {

        if(strpos($name_class,__NAMESPACE__.'\\') === '0')
        {
            $name_class = str_replace(__NAMESPACE__.'\\', '', $name_class);
            $name_class = str_replace('\\', '/', $name_class);
            require __DIR__.'/class/'. $name_class .'.class.php';
        }

    }

    /**
     *
     */
    static function register()
    {

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}