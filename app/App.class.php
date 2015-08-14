<?php

namespace Evengyl;

Class App
{

    const DB_NAME = "gets_code";
    const DB_USER = "root";
    const DB_PASS = "darkevengyl";
    const DB_HOST = "localhost";

    private static $database;


    public static function get_db()
    {
        if(self::$database == null)
        {
            self::$database =  new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }

    }


}