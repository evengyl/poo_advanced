<?php
namespace Evengyl;

Class AutoLoader
{
    /**
     * @param $name_class
     */
    static function autoload($name_class)
    {

        $name_class = str_replace('Evengyl\\', '', $name_class);
        $name_class = str_replace('\\', '/', $name_class);
    affiche_pre($name_class);
        if(preg_match("/^CLASS/", $name_class))
        {
            echo 'tata';
            require $name_class .'.class.php';
        }
        else
        {
            require 'CLASS/'. $name_class .'.class.php';
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