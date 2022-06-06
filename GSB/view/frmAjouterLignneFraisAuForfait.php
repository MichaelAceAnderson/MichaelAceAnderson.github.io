<DOCTYPE html>

<?php 

require_once ('../model/ligneFraisAuForfait.php');
?>
<html>
<head>
<meta charset="UTF-8"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
</head>

<body>
<?php
//require_once ('../model/ligneFraisAuForfait.php');
 
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
				// $existe est vide 
				if(!isset($existe)){
	
					$resu = $lff->insertFraisAuForfait(); 
					echo '<script>';
					echo 'alert("ok"); location.href="../view/frmLigneFraisAuForfait.php"';
					echo '</script>'; 
				}
			  
				
				else echo '<script>';
				echo 'alert("Prestation déja enregistrée "); location.href="../view/frmLigneFraisAuForfait.php"';
				echo '</script>';
			     
                // exit();
				//header("Location:../view/frmLigneFraisAuForfait.php");
}
   
   if (isset($_POST["choisir"])){
	 $lff=$lff= new LigneFraisAuForfait();
	 $lff->setID($_POST['IdPresta']);
	 $resu = $lff->LaLigneFraisAuForfait();
	 //var_dump ($resu); exit(); 
	 
	/* echo "<script>
	document.getElementById('idAjout').disabled = false;
	 
	 </script>";*/
	 
  }
  
  if (isset($_POST['Supprimer'])) {
	
	$numLigne = $_POST["IdPresta"];
	
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
  ?>

<div class="container">
<div class="form-group"><h2>Gestion des Frais au Forfait</h2>
<?php setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));
?></div>
    <form name="add" class="form-horizontal" role="form" method="POST" action="">
	   <div class="form-group"  >
 
		<div class="col-sm-1">
		<input id="idlff" name="numLFF" ﻿ type="hidden"  placeholder="" 
		class="form-control" value="<?php if(isset($_POST['choisir'])) echo $resu['id'] ;?>">    
		</div>
	</div>
	
      <div class="form-group">
        <label for="presta" class="col-sm-2 control-label">Prestation:</label>
        <div class="col-sm-2">
        <select name="presta" class="form-control inputstl" id="presta1">
		 <option value="">--Choisir la préstation--</option>
          <option <?php if(isset($_POST['choisir']) 
	       &&($resu['idFraisForfait'] == 'KM'))
	  { echo 'selected="selected"'; } ?> value="KM">KM
	  </option>
		  
		  <option <?php if(isset($_POST['choisir']) 
	       &&($resu['idFraisForfait'] == 'ETP'))
	  { echo 'selected="selected"'; } ?> value="ETP">ETP
	  </option>
	  <option <?php if(isset($_POST['choisir']) 
	       &&($resu['idFraisForfait'] == 'NUI'))
	  { echo 'selected="selected"'; } ?> value="NUI">NUI
	  </option>
	  <option <?php if(isset($_POST['choisir']) 
	       &&($resu['idFraisForfait'] == 'REP'))
	  { echo 'selected="selected"'; } ?> value="REP">REP
	  </option>
		  
         
        </select>          
          
        </div>
      </div>      
      <div class="form-group">
        <label for="qt" class="col-sm-2 control-label">Quantité:</label>
        <div class="col-sm-2">
          <input type="text" name="qt" class="form-control inputstl" 
		  id="qt" placeholder="Saisir la quantité"
		    value="<?php if(isset($_POST['choisir'])) echo $resu['quantite'];?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label for="qt" class="col-sm-2 control-label">Mois:</label>
        <div class="col-sm-2">
          <input type="text" name="mois" disabled="disabled" 
		  class="form-control inputstl" id="mois" placeholder=""
		     value="<?php echo date("F , Y ");?>"> 
        </div>
      </div>
	  <p><span id="rep"></span><p>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit " name="Ajouter"  id="idAjout"  
		  class="btn btn-success">Ajouter</button>
          <button  type="submit" name="modifier"   
		  onclick="return ConfirmUpdate();"
		  class="btn btn-dark">Enregister les modifications</button>	
      </div>
	  
   </div> 

</form>



      <script>
		function ConfirmUpdate(){
		  	  
			if (confirm("Confirmer la mise à jour?")){
					return true;
			}
			else {
       
			return false;
    }
} 
  </script>
</body>
</html>