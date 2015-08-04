<?php
require '/Evengyl/fonction.php';
require '../app/autoloader.php';


\Evengyl\Autoloader::register();




if(isset($_GET['page'])) $page = $_GET['page']; else $page = 'home';

//init de la class base de données

$pdo = new \Evengyl\Database();
$content_sure = new \Evengyl\security\Verif_content();
$get_template = new \Evengyl\security\Attribution_module();

ob_start();
    //ici on require envoi le "name module que l'on veux appeler"
    if($page == 'home')
    {
        ?>__MOD_Home__<?php
        $title_page = 'Home Page';
    }
    else if($page == 'single')
    {
        ?>__MOD_Single__<?php
        $title_page = 'Single Page';
    }
    else if($page == 'dual')
    {
        ?>__MOD_Dual__<?php
        $title_page = 'Dual Page';
    }
    else if($page == 'listing_clients')
    {
        ?>__MOD_Client__<?php
        $title_page = 'Listing New Clients';
    }
    else if($page == 'skyrim_mods')
    {
        ?>__MOD_Mods_skyrim__<?php
        $title_page = 'List Skyrim Bob Lenon mods';
    }


$module_call = ob_get_clean(); // on recup lappel au module
$module_name = $get_template->get_module_name($module_call); // on execute la fonction qui retourne le module utilisé



require_once "../app/class/module/" . $module_name . ".class.php"; // //on appel le module
// le module va appeler le template corespondant a son nom de class
$content = $content_sure->get_content_sure($content_templates);
require_once "../contents/templates/default.php";



?>
