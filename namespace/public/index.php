<?php
require "../app/autoloader.php";
\Evengyl\Autoloader::register();
$base_path = "/poo_advanced/namespace/public";
$app = \Evengyl\db\App::get_instance();


use \Evengyl\module\Construct_categ;

// enregistrement du logo
ob_start();
require '../content/show_logo.php';
$header = ob_get_clean();



// enregistrement du breadcumb
ob_start();
require '../content/show_breadcumb.php';
$breadcumb_content = ob_get_clean();



//start menu lateral + la home page avec des article aléatoire + prochainement des textes et articles + explication
ob_start();

if(isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 'home';

if($page == 'home')
{
    $title_page = 'Home Page';
    require "../content/show_menu_lateral.php";

    $current_categ = 'Category';
    require "../content/show_category.php";

    require "../content/show_home_page.php";

}
else
{
    require "../content/show_menu_lateral.php";
}
$menu_lateral = ob_get_clean();





// system de contenu
ob_start();

if($page == 'category')
{
    if(!isset($_GET['categ_id']) && !isset($_GET['id_sub_categ']))
    {
        //si on n'a pas d'id de categ ni d'id de sub categ c'est que l'on doit afficher uniquement la listes des categ
        $title_page = 'List of category';
        $current_categ = 'Category';
        require "../content/show_category.php";
    }

    else if(isset($_GET['categ_id']) && !isset($_GET['id_sub_categ']))
    {
        //Si on a un id de catégorie mais pas de sub categ id , on affiche la listes des sub categ
        $name_page = Construct_categ::db_get_name_current_categ($_GET['categ_id']);
        $title_page = $name_page[0]->name_categ;
        require "../content/show_sub_category.php";
    }

    else if(isset($_GET['categ_id']) && $_GET['categ_id'] != "" && isset($_GET['id_sub_categ']) && $_GET['id_sub_categ'] != "" && !isset($_GET['id_article']))
    {
        // si on possède un id de categ un id de sub catg ,on affiche l'ensemble des articles associés a cette manip
        $name_page = Construct_categ::db_get_name_current_subcateg($_GET['id_sub_categ']);
        $title_page = 'List articles of '.$name_page[0]->name_sub_categ;
        require "../content/show_list_articles.php";
    }

    else if(isset($_GET['categ_id']) && $_GET['categ_id'] != "" && isset($_GET['id_sub_categ']) && $_GET['id_sub_categ'] != "" && isset($_GET['id_article']) && $_GET['id_article'] != "")
    {
        // si on possède un id de categ un id de sub catg ,et un id d'article , on affiche directement l'article associé a cette id
        require "../content/show_articles.php";
    }
}

$content = ob_get_clean();

require_once "../content/templates/default.php";
?>