<?php
namespace Evengyl\page;

$pdo = Evengyl\App::get_db();
$res_sql = $pdo->prepare_pdo("SELECT * FROM table_test WHERE id = :id", [$_GET["id"]], "Article", true);



?>
<a class="btn btn-primary btn-lg" href="<?php echo $foo->get_url_back(); ?>" role="button">Back</a>

<?
affiche_pre($res_sql);
?>
ici sera présent le contenu de la page article