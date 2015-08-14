<?php

require '/Evengyl/fonction.php';
require '../app/Autoloader.php';


\Evengyl\Autoloader::register();




if(isset($_GET['page'])) $page = $_GET['page']; else $page = 'home';



ob_start();


    //ici on require envoi le "name module que l'on veux appeler"
if($page == 'home')
{
    $title_page = 'Home Page';
    require "../page/Home.php";
}
else if($page == 'article')
{
    $title_page = 'Article';
    require "../page/Article.php";
}
else if($page == 'skyrim_mods')
{
    $title_page = 'List Skyrim Bob Lenon mods';
    require "../page/Mods_skyrim.php";
}




$content = ob_get_clean(); // on recup lappel au module
 // on execute la fonction qui retourne le module utilisé


require_once "../page/templates/default.php";



?>
