<?php
namespace Evengyl;

use \PDO;


Class Database
{
    private $database_name = "";
    private $user = "";
    private $password = "";
    private $host = "";
    public $pdo = "";


    /**
     * @param string $database_name
     * @param string $user
     * @param string $password
     * @param string $host
     */
    public function __construct($database_name = "matedex", $user = "root", $password = "darkevengyl", $host = "localhost")
    {
        $this->database_name = $database_name;
        $this->user = $user;
        $this->password = $password;
        $this->host = $host;
    }



    /**
     * @return PDO
     */
    private function get_pdo()
    {
        if($this->pdo == null)
        {
            $pdo = new PDO('mysql:dbname='.$this->database_name.';host='.$this->host, $this->user, $this->password);
            // initialisation à la base de données , fonctionne comme avec mysqli.
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // attribution des code d'erreur de retour comme le die() de mysqli
            $this->pdo = $pdo;
        }
        return $pdo;
    }


    /**
     * @param $query
     * @return resultat tab -> obj
     */
    public function exec_pdo($query)
    {
        $res_pdo = $this->get_pdo()->exec($query);
        return $res_pdo->fetchAll(PDO::FETCH_OBJ);
    } 


    /**
     * @param $query
     * @return array
     */
    public function query_pdo($query, $class_name)
    {
        $res_pdo = $this->get_pdo()->query($query); /*comme on renvoi directement une instance de PDO on peux l'utiliser directement avec une autre méthode*/
        return $res_pdo->fetchAll(PDO::FETCH_CLASS,$class_name);
        /* en gros avec PDO je peux le dire d'au lieu de me retourner un objet de class standart comme avec
           mysqli, je peux lui dire de retourner un objet de class "citée après la virgule avec Fetch Class*/

    }


}



?>