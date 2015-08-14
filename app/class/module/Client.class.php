<?php

namespace Evengyl\module;

Class Client
{
	public $url = "";
    private $class_name;


    public function get_link_website()
    {
        return '?page=client_no='.$this->id;
    }

    public function get_url()
    {
        return "<a href='index.php?page=article&table=marketing_matedex&id=" . $this->id . "'>Lien vers la page complète du client</a>";
    }




    public function get_template_content($module_name)
    {

        require "../../contents/".$module_name;
    }

    public function get_template_name()
    {
        return $this->class_name = "Client";
    }
}

$foo = new Client;
$template_name = $foo->get_template_name();
ob_start();
require "../contents/" . $template_name . ".php";
$content_templates = ob_get_clean();


?>