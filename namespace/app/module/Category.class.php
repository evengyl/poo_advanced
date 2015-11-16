<?php
namespace Evengyl\module;

Class Category extends Construct_categ
{
    public $id;
    public $name;
    public $name_without_link;
    public $description;
    public $date_last_sync;

    public function __construct()
    {
        $this->get_name_without_link();
        $this->get_name_url();
    }
    private function get_name_url()
    {
        $this->name = "<a href='?page=category&categ_id=".$this->id."'>".$this->name."</a>";
    }

    public function get_name_without_link()
    {
        $this->name_without_link = $this->name;
    }


    public function get_name()
    {
        return $this->name;
    }


}


?>