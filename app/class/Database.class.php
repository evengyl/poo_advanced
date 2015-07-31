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
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
    public function query_pdo($query)
    {
        $res_pdo = $this->get_pdo()->query($query);
        return $res_pdo->fetchAll(PDO::FETCH_OBJ);
    }
}



?>