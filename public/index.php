<?php
require_once ('../app/autoloader/autoloader.php');

Evengyl\Autoloader::register();

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'home';
}


if($page == 'home')
{
    require '../contents/home.php';
}
else if($page == 'single')
{
    require '../contents/single.php';
}

?>
