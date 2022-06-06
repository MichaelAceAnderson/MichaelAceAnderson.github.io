<?php
require('utilisateur.php');
require('../include/dao.php');	

class LigneFraisHorsForfait{
	private $id;
	private $visiteur;
	private $prestation;
	private $datePresta;
	private $montant ;

  function __construct() {
  }
  function setId($id) {
      $this->id = $id;
  }
  function setVisiteur($visiteur) {
      $this->visiteur = $visiteur;
  }

    function setPrestation($presta) {
      $this->prestation = $presta;
  }
  
    function setdatePresta($date) {
      $this->datePresta = $date;
  }
      function setMontant($montant) {
      $this->montant = $montant;
  }
  
	  function insertLFHF1(){


	  $dao = new Dao();
        //Requête SQL
        $sql = "INSERT INTO  lignefraishorsforfait
		(visiteur, prestation, datePresta,montant)   VALUES (	
		'".$this->visiteur."', 
		'".$this->prestation."',
		'".$this->datePresta."', 
		'".$this->montant."' )";
        $resu = $dao->executeRequete($sql);  
  }
  
  function tousFraisHorsForfait(){
	$dao = new Dao();
	try{
    $sql = "SELECT id,prestation,datePresta,montant 
			FROM lignefraishorsforfait 
			WHERE 
			visiteur = '$this->visiteur'
			and datePresta='$this->datePresta'";
    $resu = $dao->executeRequete($sql);
    
    return $resu;
	}
	catch (PDOException $exception) {  
            echo "Connection error: " . $exception->getMessage();
        }
    
}


  function supprimerLigneFraisHorsForfait(){
	  //Pour la connexion
	  $dao=new Dao();
	   try{
   //$id le numéro de la ligne à supprimer
	$sql = "DELETE FROM lignefraishorsforfait
	WHERE id= '$this->id'";
	// On execute la requete
	$resu = $dao->executeRequete($sql);
	 return   $resu;
	   }
    catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
}
  
  
  
  function LaLigneFraisHorsForfait(){
	$dao = new Dao();
    $sql = "SELECT * FROM lignefraishorsforfait WHERE id= '$this->id'";
    $resu = $dao->executeRequete($sql);
    $ligne = $resu->fetch(PDO::FETCH_ASSOC);
    return $ligne;
    
}

  public function updateLigneFHF(){
        $dao = new Dao();
        $sql = "update lignefraishorsforfait
		set 
		    prestation= '$this->prestation',
		    datePresta='$this->datePresta' ,
			montant='$this->montant'
		where id='$this->id'";
        $resu = $dao->executeRequete($sql);
    }
  
}


?>

