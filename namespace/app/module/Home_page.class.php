<?php
namespace Evengyl\module;

use \Evengyl\db\App;

Class Home_page
{

    public function db_get_number_articles()
    {
        $temp =  App::DB()->query_pdo("SELECT  count(*) FROM test_articles");

        foreach($temp[0] as $key)
        {
            return $key;
        }
    }

    public function db_get_random_article($array_random_number)
    {
        foreach($array_random_number as $id_random)
        {
            $res_sql[] = App::DB()->query_pdo("SELECT * FROM test_articles WHERE id= '" . $id_random . "'", "Evengyl\module\Articles");
        }
        return $res_sql;
    }
}
?>