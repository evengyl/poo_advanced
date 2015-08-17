<?php

namespace Evengyl;

Class Mods_skyrim
{
    private $class_name;
    private $id;
    private $description;
    private $nom;

    public function get_template_name()
    {
        return $this->class_name = "Mods_skyrim";
    }
    public function get_nom()
    {
        return "<b>Nom : </b>" . html_entity_decode(ucfirst($this->nom));
    }
    public function get_url()
    {
        return 'index.php?page=article&table=mods_bob_lennon&id=' . $this->id;
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
?>