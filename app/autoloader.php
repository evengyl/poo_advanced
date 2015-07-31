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
        require 'class/'. $name_class .'.class.php';
    }

    /**
     *
     */
    static function register()
    {

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}