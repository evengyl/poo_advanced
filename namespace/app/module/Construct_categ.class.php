<?php
namespace Evengyl\module;

use \Evengyl\db\App;


Class Construct_categ
{

    public function db_get_category_and_sub()
    {
        $category = App::DB()->query_pdo("SELECT * FROM test_category ORDER BY id", 'Evengyl\module\Category');
        return $list_ok = $this->assembleur_categ_sub_categ($category);

    }

    private function assembleur_categ_sub_categ($category)
    {
        foreach($category  as $categ)
        {

            $categ->sub_category = App::DB()->query_pdo("SELECT * FROM test_sub_category WHERE id_categ = '" . $categ->id . "'ORDER BY id", 'Evengyl\module\Sub_category');


            if(!isset($categ->sub_category[0]))
            {
                unset($categ->sub_category);
            }
        }
        return $category;
    }

    public function db_get_articles($id_sub_categ, $id_categ)
    {
        $query = "SELECT * FROM test_articles WHERE id_categ = :id_categ AND id_sub_categ = :id_sub_categ ORDER BY id";
        $options = array(":id_sub_categ" => $id_sub_categ, ":id_categ" => $id_categ);
        $class_name = "Evengyl\module\Articles";
        $one_article = "";

        $res_sql =  App::DB()->prepare_pdo($query, $options, $class_name, $one_article);

        return $res_sql;
        //elle revois les subcateg et dois ensuite allier les articles de la categ
        //pour gagner en vitesse et en temps d exec , elle ne recois que la sub categ qui à été choisie et va chercher ses articles
    }

    public function db_get_article_simple($id_article)
    {
        $query = "SELECT * FROM test_articles WHERE id = :id_article";
        $options = array(":id_article" => $id_article);
        $class_name = "Evengyl\module\Articles";
        $one_article = true;
        return App::DB()->prepare_pdo($query, $options, $class_name, $one_article);
    }

    public function db_get_name_current_page($id_categ)
    {
        return App::DB()->query_pdo("SELECT name FROM test_category WHERE id = '" . $id_categ . "'", "");
    }

    public function db_get_name_current_sub_page($id_sub_categ)
    {
        return App::DB()->query_pdo("SELECT name FROM test_sub_category WHERE id = '" . $id_sub_categ . "'", "");
    }



    public function db_get_numb_article($categ_id)
    {

        $temp =  App::DB()->query_pdo("SELECT id FROM test_articles WHERE id = '" . $categ_id . "'", "");


    }
}
?>