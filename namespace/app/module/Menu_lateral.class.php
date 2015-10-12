<?php
Namespace Evengyl\module;


use \Evengyl\db\App;

Class Menu_lateral
{
    private $category = array();
    private $sub_category = array();

    public function db_get_architecture()
    {
        $this->category = App::DB()->query_pdo("SELECT id, name FROM test_category ORDER BY id", "");
        $this->sub_category = App::DB()->query_pdo("SELECT id, id_categ, name FROM test_sub_category ORDER BY id", "");

        foreach($this->category as $categ)
        {
            $categ->name = $this->get_url_menu_categ($categ->name, $categ->id);
            $categ->sub_categ = array();

            foreach($this->sub_category as $sub_categ)
            {
                if($sub_categ->id_categ == $categ->id)
                {
                    $categ->sub_categ[] = $this->get_url_menu_sub_categ($sub_categ->name, $categ->id , $sub_categ->id);
                }
            }
        }
        return $this->category;
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