<?php
session_start();
?>
<?php

require_once ('../model/ligneFraisHorsForfait.php');

require_once ('../include/dao.php');

if (isset($_POST['Ajouter'])) {
                //Creation objet lignefraisforfait
                $lfhf = new LigneFraisHorsForfait();
				//$lff1 = new LigneFraisAuForfait();
				
				//$visiteur = new Utilisateur();
			
                $idVis = $_SESSION['id'];
				
                
                $presta = $_POST['presta'];
				
                $montant = $_POST['montant'];
				$datePresta = $_POST['date'];
				
				
				$lfhf->setVisiteur($idVis);
				$lfhf->setPrestation($presta);
				$lfhf->setMontant($montant);
				$lfhf->setdatePresta($datePresta);
				
				//$lfhf->setDate($justif);
				
				
				//var_dump($lfhf); exit();
               
				  $lfhf->insertLFHF1();
				
				header("Location:../view/frmLigneFraisHorsForfait.php");
}
/*supprimer est le nom name="supprimer" du button d
dans la vue ligneFraisAuForfait.php

if (isset($_POST['Supprimer'])) {
	
	$numLigne = $_POST["IdPresta"];
	//echo ($numLigne); echo "Bonjour"; exit();
	$lff = new LigneFraisAuForfait();
	$lff->setId($numLigne);
	$lff->supprimerLigneFraisAuForfait();
	header("Location:../view/frmLigneFraisAuForfait.php");
	
}
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
	
	
}
*/



?>