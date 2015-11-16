<?php
namespace Evengyl\module;

use \Evengyl\db\App;

Class Construct_categ
{
    public static function db_get_category_and_sub()
    {
        $category = App::DB()->query_pdo("SELECT * FROM test_category ORDER BY id", 'Evengyl\module\Category');
        return $list_ok = self::construct_categ_sub_categ($category);
    }

    private static function db_get_sub_category($id_categ_current)
    {
        return App::DB()->query_pdo("SELECT * FROM test_sub_category WHERE id_categ = '" . $id_categ_current . "'ORDER BY id", 'Evengyl\module\Sub_category');
    }

    private static function construct_categ_sub_categ($category)
    {
        foreach($category  as $categ)
        {
            $categ->sub_category = self::db_get_sub_category($categ->id);


            if(!isset($categ->sub_category[0]))
            {
                unset($categ->sub_category);
            }
        }
        return $category;
    }

    public static function db_get_name_current_categ($id_categ)
    {
        return App::DB()->query_pdo("SELECT name AS name_categ FROM test_category WHERE id = '" . $id_categ . "'", "");
    }

    public static function db_get_name_current_subcateg($id_sub_categ)
    {
        return App::DB()->query_pdo("SELECT name AS name_sub_categ FROM test_sub_category WHERE id = '" . $id_sub_categ . "'", "");
    }
}