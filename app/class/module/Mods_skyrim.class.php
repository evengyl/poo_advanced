<?php

namespace Evengyl\module;

Class Mods_skyrim
{
    private $class_name;
    private $id;
    private $description;


    public function get_template_name()
    {
        return $this->class_name = "Mods_skyrim";
    }

    public function get_url_complet()
    {
        return 'index.php?page=skyrim_mods&id=' . $this->id;
    }

    public function get_id_propre()
    {
        return '<button class="btn btn-primary" type="button">Numéro du mods : <span class="badge">' . $this->id . '</span></button>';
    }

    public function get_extrait()
    {
        $extrait = substr($this->description,0,50);
        $extrait .= ". . . <a href='" . $this->get_url_complet() . "'>Voir la suite</a>";
        return $extrait;
    }

}
$foo = new Mods_skyrim();

$template_name = $foo->get_template_name();
ob_start();
require "../contents/" . $template_name . ".php";
$content_templates = ob_get_clean();

?>