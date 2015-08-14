<?php

namespace Evengyl\module;

Class Article
{
    private $class_name;
    private $url_back = "index.php?page=home";

    public function get_template_name()
    {
        return $this->class_name = "Article";
    }
    public function get_url_back()
    {
        return $this->url_back;
    }
}


//$table = $_GET["table"];
//$id = $_GET["id"];

//$res_sql = $pdo->query_pdo('SELECT * FROM '.$table.' WHERE id= "'.$id.'"', '\Evengyl\module\Article');

//or



$table = $_GET['table'];

$res_sql = $pdo->prepare_pdo("SELECT * FROM " . $table . " WHERE id = :id", [':id'=>$_GET['id']], '\Evengyl\module\Article', true);

// description de cette ligne
/* l'objet pdo étant initialiser en tout début de fichier index , on appel la fonction prepare_pdo qui sera détaillée dans le fichier database
    En premier parametre la fonction acceuil la query avec pour valeur de variable :var ce qui sera lu par la fonction execute apres
    en deuxieme paramettre un tableau avec comme clés le param :var et comme valeur , sa valeur assignée
    En troisème paramètre , la class avec lequelle fetch class va travailler
    en quatrieme parametre on dis juste a la fonction que d'utiler un fetch sur un seul résusltat, false pour plusieurs

*/


$foo = new Article;
$template_name = $foo->get_template_name();
ob_start();
require "../contents/" . $template_name . ".php";
$content_templates = ob_get_clean();

?>