<?php
namespace Evengyl\module;

Class Sub_category extends Articles
{
    public $id;
    public $id_categ;
    public $name;
    public $name_simple;
    public $date_last_sync;

    public function __construct()
    {
        $this->get_name_simple();
        $this->get_name_url();
    }
    private function get_name_simple()
    {
        $this->name_simple = "<a href='index.php?page=category&categ_id=" . $this->id_categ . "&id_sub_categ=" . $this->id . "'>".$this->name."</a>&nbsp;&nbsp;";
    }
    private function get_name_url()
    {
        $this->name = "<a class='btn btn-primary-no-bg' role='button' href='index.php?page=category&categ_id=" . $this->id_categ . "&id_sub_categ=" . $this->id . "'>".$this->name."</a>&nbsp;&nbsp;";
    }
    public function get_name()
    {
        return $this->name;
    }
}

?>