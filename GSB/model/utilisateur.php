<?php


class Utilisateur {
  private $id;
  private $nom;
  private $prenom;
  private $login;
  private $mdp;
  private $idType;
  
  // le constructeur est une fonction qui permet d'initialiser un objet vide
  //L'objet c'est l'initialisation des attributs d'une classe 
  //on parle :d'instanciation d'un objet .
  function __construct() {  
  }
  function setId($id) {
      $this->id = $id;
  }
  function setNom($nom) {
      $this->nom = $nom;
  }
  function setPrenom($prenom) {
      $this->prenom = $prenom;
  }
  function setLogin($login) {
      $this->login = $login;
  }
  function setMdp($mdp) {
      $this->mdp = $mdp;
  }
  function setIdType($idType) {
      $this->idType = $idType;
  }
  function getId(){
	  return $this->id;
  }
  function verifierInfosConnexion(){
    $dao=new Dao();
    $user=null;
    $sql= "SELECT * FROM utilisateur WHERE 
	login = '$this->login' and mdp = '$this->mdp'";
    $resu= $dao->executeRequete($sql);
     $ligne = $resu->fetch(PDO::FETCH_ASSOC);
           // var_dump($ligne);
            if ($resu->rowCount() == 1) {
                   $user=$ligne;            
            }
    return $user;
}

function tousLesVisiteurs(){
	
	$dao = new Dao();
	try{
    $sql = "SELECT distinct u.id id , nom , prenom 
			FROM utilisateur u , lignefraisforfait l
			WHERE  
			idType = 1 
			and u.id= idVisiteur
			order by nom,prenom";
    $resu = $dao->executeRequete($sql);
    
    return $resu;
	}
	catch (PDOException $exception) {  
            echo "Connection error: " . $exception->getMessage();
        }
    
	
}
	
function TotalFraisAuForfaisVisiteur(){
	$moisEnCours=date("Ym");
	$dao = new Dao();
	try{
    $sql = "SELECT distinct u.id id , 
	sum(quantite*montant),nom,prenom,dateModif
	
			FROM utilisateur u , lignefraisforfait l
			WHERE  
			idType = 1 
			and u.id= idVisiteur
			and u.id='$this->id'
			group by  id,nom,prenom
			order by nom,prenom";
    $resu = $dao->executeRequete($sql);
    
    return $resu;
	}
	catch (PDOException $exception) {  
            echo "Connection error: " . $exception->getMessage();
        }
    
	
}
	
}
        
?>

