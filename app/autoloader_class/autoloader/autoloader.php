<?php


Class AutoLoader
{
    static function autoload($name_class)
    {
        require '/class/'. $name_class .'.class.php';

    }
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}