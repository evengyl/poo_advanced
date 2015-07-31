<?php
require '/Evengyl/fonction.php';
require '../app/autoloader.php';


\Evengyl\Autoloader::register();




if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'home';
}

//init de la class base de données

$pdo = new \Evengyl\Database();
ob_start();

    if($page == 'home')
    {
        require '../contents/home.php';
    }
    else if($page == 'single')
    {
        require '../contents/single.php';
    }

$content = ob_get_clean();
require_once "../contents/templates/default.php";


?>
