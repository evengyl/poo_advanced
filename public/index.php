<?php
require '/Evengyl/fonction.php';
require '../app/autoloader.php';


\Evengyl\Autoloader::register();




if(isset($_GET['page'])) $page = $_GET['page']; else $page = 'home';

//init de la class base de données

$pdo = new \Evengyl\Database();
$content_sure = new \Evengyl\security\Verif_content();

ob_start();

    if($page == 'home')
    {
        require '../contents/home.php';
        $title_page = 'Home Page';
    }
    else if($page == 'single')
    {
        require '../contents/single.php';
        $title_page = 'Single Page';
    }
    else if($page == 'listing_clients')
    {
        require '../contents/clients.php';
        $title_page = 'Listing New Clients';
    }


$content = ob_get_clean();
$content = $content_sure->get_content_sure($content);
require_once "../contents/templates/default.php";


?>
