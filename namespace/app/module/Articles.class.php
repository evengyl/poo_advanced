<?php
namespace Evengyl\module;

Class Articles
{
    public $id;
    public $id_categ;
    public $id_sub_categ;
    public $nb_view;
    public $sub_title;
    public $content;
    public $date_create;
    public $date_last_sync;
    public $title;
    public $title_link;
    public $title_link_button;
    public $name_categ;
    public $name_sub_categ;

    public $nb_caract_view = 340;

    public $resumer;

    public function __construct()
    {
        $this->get_resumer($this->content);
        $this->get_title_link($this->title);
        $this->get_sub_title($this->sub_title);
        $this->get_link_image($this->code_matedex);
        $this->get_title_button_link($this->title);
        $this->get_title($this->title);
        $this->title = $this->set_title($this->title);

    }

    private function get_title($title)
    {
        $this->title = $title;
    }

    private function set_title($title)
    {
        return ucfirst($title);
    }


    public function set_nb_caract_view($nb_caract_view)
    {
        $this->nb_caract_view = $nb_caract_view;
    }


    private function get_resumer($content)
    {
        $this->resumer = substr($content, 0, $this->nb_caract_view);
        $this->resumer .= "...";
        $this->resumer .= "<a  href='index.php?page=category&categ_id=" . $this->id_categ . "&id_sub_categ=" . $this->id_sub_categ . "&id_article=" . $this->id . "'>Lire la Suite</a>";
    }


    private function get_title_link($title)
    {
        $this->title_link = ucfirst($title);
        $this->title_link = "<a  href='index.php?page=category&categ_id=" . $this->id_categ . "&id_sub_categ=" . $this->id_sub_categ . "&id_article=" . $this->id . "'>" . $this->title . "</a>";
    }


    private function get_title_button_link($title)
    {
        $title = ucfirst($title);
        //\Evengyl\db\App::affiche_pre(explode(' ',$title));
        $this->title_link_button = "<a href='#' class='btn btn-primary-no-bg' role='button'>" . $title . "</a>";
    }



    private function get_sub_title($sub_title)
    {
        $this->sub_title = ucfirst($sub_title);
        $this->sub_title .= '.';
    }


    private function db_get_name_categ_and_sub($id_categ, $id_sub_categ)
    {
        //cette fonction va recup le nom de des catégorie associées a cette article pour créer la page et l'url
    }


    private function get_link_image($code_matedex)
    {
        $code_matedex = str_replace(" ", "", $code_matedex);
        $this->url_image = "images/articles/" . $code_matedex . ".jpg";


        // terminer la function
    }



}


?>