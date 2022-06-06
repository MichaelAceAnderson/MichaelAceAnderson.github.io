<?php
session_start();
?>
<?php
require_once ('../model/utilisateur.php');
require_once ('../model/ligneFraisAuForfait.php');
require_once ('../model/fraisForfait.php');
require_once ('../include/dao.php');
/*
if (isset($_POST['Ajouter'])) {
                //Creation objet lignefraisforfait
                $lff = new LigneFraisAuForfait();
				$lff1 = new LigneFraisAuForfait();
				$ff = new fraisForfait();
				$visiteur = new Utilisateur();
			
                $idVis = $_SESSION['id'];
				
               // $mois = $_POST['mois'];
                $presta = $_POST['presta'];
                $qt = $_POST['qt'];
				
				$visiteur->setId($idVis);
				$ff->setId($presta);
				$idPresta = $ff->getId();
				//echo $idPresta ; exit();
				//$lff->setId($viteur->getId());
				$lff->setVisiteur($idVis);
				//année courante
				//$annee = date("Y");
				//année + mois
				$mois =date("Ym");
                $lff->setMois($mois);
                $lff->setFraisForfait($idPresta);
                $lff->setQuantite($qt);
                //Ajoute une prestation
				// var_dump($lff); exit();
                 // echo date("Ym");                 exit();
				 
				$existe =$lff->verifLigneFraisAuForfait();
				//var_dump ($existe); exit();
				if(!isset($existe)){
               $resu = $lff->insertFraisAuForfait(); 
			   
			   echo "<font color='red'>Duree field is empty.</font><br/>";
			  
				}
				else echo "incorrect";
			     
                // exit();
				header("Location:../view/frmLigneFraisAuForfait.php");
}*/
/*supprimer est le nom name="supprimer" du button d
dans la vue ligneFraisAuForfait.php*/
/*
if (isset($_POST['Supprimer'])) {
	
	$numLigne = $_POST["IdPresta"];
	
	$lff = new LigneFraisAuForfait();
	$lff->setId($numLigne);
	
	$lff->supprimerLigneFraisAuForfait();
	header("Location:../view/frmLigneFraisAuForfait.php");
	
}*/
/*
if (isset($_POST['modifier'])) {
	$numLigne = $_POST["numLFF"];
	 $presta = $_POST['presta'];
     $qt = $_POST['qt'];
	    
	
	 $lff = new LigneFraisAuForfait();
	 $lff->setId($numLigne);
	 $lff->setFraisForfait($presta);
     $lff->setQuantite($qt);
	// var_dump($lff); exit();
	 $lff->updateLigneFF();
	 header("Location:../view/frmLigneFraisAuForfait.php");
	
	
}*/




?>