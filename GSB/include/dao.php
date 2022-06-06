<?php
require_once ('dbConfig.inc.php');
class Dao {

    // attribut de connexion pointer le serveur SGBD et la base de données bdd_pdo
    private $maConnexion;
  // consrtucteur initialisation de la connexion a la bdd
    
    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->maConnexion = $db;
    }
    
    
   public function executeRequete($sql) {

        try {
            $resu = $this->maConnexion->prepare($sql);
            $resu->execute();
            return $resu;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }  
    
    public  function disconnect()
    {
        $this->maConnexion = null;
    }
    
}

