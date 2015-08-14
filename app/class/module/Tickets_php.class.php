<?php

namespace Evengyl\module;

Class Tickets_php
{
    public $url = "";
    private $class_name;
    private $id;
    private $commentaire;
    private $date;




    public function get_url()
    {
        return "index.php?page=article&table=ticket_php&id=" . $this->id . "";
    }

    public function get_date()
    {

        return '<button class="btn btn-primary" type="button">Date du Ticket : <span class="badge">' . $this->date . '</span></button>';
    }
    public function get_commentaire()
    {
        $extrait = substr($this->commentaire,0,80);
        $extrait .= ". . . <a href='" . $this->get_url() . "'>Voir la suite</a>";
        return ucfirst($extrait);
    }




    public function get_template_content($module_name)
    {

        require "../../contents/".$module_name;
    }

    public function get_template_name()
    {
        return $this->class_name = "Tickets_php";
    }
}

$foo = new Tickets_php;
$template_name = $foo->get_template_name();
ob_start();
require "../contents/" . $template_name . ".php";
$content_templates = ob_get_clean();


?>