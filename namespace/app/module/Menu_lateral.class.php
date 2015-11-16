<?php
Namespace Evengyl\module;


use \Evengyl\db\App;
use \Evengyl\module\Construct_categ;

Class Menu_lateral
{
    private $category = array();
    private $sub_category = array();

    public function get_categ_subcateg()
    {
        $category = Construct_categ::db_get_category_and_sub();


        foreach($category as $categ)
        {
            $categ->name_menu_left = " ";
            $categ->name_menu_left = $this->get_url_menu_categ($categ->name_without_link, $categ->id);

            foreach($categ->sub_category as $sub_categ)
            {
                $sub_categ->name_menu_left = " ";
                $sub_categ->name_menu_left = $this->get_url_menu_sub_categ($sub_categ->name_without_link, $categ->id , $sub_categ->id);

            }
        }
        return $category;
    }



    private function get_url_menu_categ($name, $categ_id)
    {
        return "<a class='list-group-item active' href='?page=category&categ_id=" . $categ_id . "'>&nbsp;&nbsp;" . $name . "</a>";
    }
    private function get_url_menu_sub_categ($name, $id_categ, $id_sub_categ)
    {
        return "<a class='list-group-item' href='index.php?page=category&categ_id=" . $id_categ . "&id_sub_categ=" . $id_sub_categ . "'>&nbsp;&nbsp;" . $name . "</a>";
    }

}

?>