<?php

namespace Evengyl\module;

Class Mods_skyrim
{
    private $class_name;
    private $id;
    private $description;



    public function __get($key) // toute les variable que la class ne connais pas , arrive ici
    {
        $call_method = 'get_' . $key;  // apres je fait un appel de cette méthode
        return $this->$call_method(); // on return l'affichage de l'appel de la fonction get_
    }

    public function get_template_name()
    {
        return $this->class_name = "Mods_skyrim";
    }

    public function get_url()
    {
        return 'index.php?page=skyrim_mods&id=' . $this->id;
    }

    public function get_id()
    {
        return '<button class="btn btn-primary" type="button">Numéro du mods : <span class="badge">' . $this->id . '</span></button>';
    }

    public function get_extrait()
    {
        $extrait = substr($this->description,0,50);
        $extrait .= ". . . <a href='" . $this->get_url() . "'>Voir la suite</a>";
        return $extrait;
    }

}
$foo = new Mods_skyrim();

$template_name = $foo->get_template_name();
ob_start();
require "../contents/" . $template_name . ".php";
$content_templates = ob_get_clean();

?>