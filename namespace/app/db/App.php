<?php
namespace Evengyl\db;

Class App
{


    private static $_instance;

    public static function get_instance()
    {
        if(is_null(self::$_instance))
        {
            self::$_instance = new App();
        }
        return self::$_instance;
    }





private static $database;

    const DB_NAME = "conception";
    const DB_USER = "root";
    const DB_PASS = "darkevengyl";
    const DB_HOST = "localhost";

    const LOGO = "Weller";


    public static function DB()
    {
        if(self::$database == null)
        {
            self::$database = new \Evengyl\db\Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);

        }
        return  self::$database;


    }
    public static function set_logo_website()
    {
        $name_website = self::LOGO;
        $name_website = strtolower($name_website);

        $name_website = "/images/logo_" . $name_website . ".png";
        return $name_website;
    }
}

?>