<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GSB</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<?php include("header.php") ;
require_once ('../model/ligneFraisHorsForfait.php');

date_default_timezone_set('Europe/London');


require_once ('../include/dao.php');

if (isset($_POST['Ajouter'])) {
                //Creation objet lignefraisforfait
                $lfhf = new LigneFraisHorsForfait();
                $idVis = $_SESSION['id'];
                $presta = $_POST['presta'];
                $montant = $_POST['montant'];
				$datePresta = $_POST['date'];
				$lfhf->setVisiteur($idVis);
				$lfhf->setPrestation($presta);
				$lfhf->setMontant($montant);
				$lfhf->setdatePresta($datePresta);
				//var_dump($lfhf); exit();
				  $lfhf->insertLFHF1();
				header("Location:../view/frmLigneFraisHorsForfait.php");
}

if (isset($_POST['Supprimer'])) {
	
	$numLigne = $_POST["IdPresta"];
	
	$lff = new LigneFraisHorsForfait();
	$lff->setId($numLigne);
	
	$lff->supprimerLigneFraisHorsForfait();
	header("Location:../view/frmLigneFraisHorsForfait.php");
	
}

if (isset($_POST["choisir"])){
	 $lff=$lff= new LigneFraisHorsForfait();
	 $lff->setID($_POST['IdPresta']);
	 $resu = $lff->LaLigneFraisHorsForfait();
	 //var_dump ($resu); exit(); 
	 
  }
  
  
if (isset($_POST['modifier'])) {
	$numLigne = $_POST["numLFHF"];
	 $presta = $_POST['presta'];
	 $datePresta = $_POST['date'];
     $montant = $_POST['montant'];
	    
	
	 $lfhf = new LigneFraisHorsForfait();
	 $lfhf->setId($numLigne);
	 $lfhf->setPrestation($presta);
     $lfhf->setdatePresta($datePresta);
	 $lfhf->setMontant($montant);
	// var_dump($lff); exit();
	 $lfhf->updateLigneFHF();
	 header("Location:../view/frmLigneFraisHorsForfait.php");
	
}

?> 

<div class="container">
<h1>Gestion des Frais Hors Forfait</h1>
    <form class="form-horizontal" 
	role="form" method="POST" action="">

	   <div class="form-group"  >
 
		<div class="col-sm-1">
		<input id="idlff" name="numLFHF" type="text" placeholder="" 
		class="form-control" 
		value="<?php if(isset($_POST['choisir'])) echo $resu['id'] ;?>">    
		</div>
	</div>
	<div class="form-group"  >
        <label for="presta" class="col-sm-2 control-label">Description:</label>
		<div class="col-sm-2">
		<input id="libelle" name="presta" type="text" placeholder="" 
		class="form-control" 
		value="<?php if(isset($_POST['choisir'])) echo $resu['prestation'] ;?>">    
		</div>
	</div>
      
      <div class="form-group">
        <label for="montant" class="col-sm-2 control-label">Montant:</label>
        <div class="col-sm-2">
          <input type="text" name="montant" class="form-control inputstl" 
		  id="montant" placeholder="Saisir le montant"
		    value="<?php if(isset($_POST['choisir'])) echo $resu['montant'] ;?> ">
        </div>
      </div>
	  
	     <div class="form-group">
        <label for="date" class="col-sm-2 control-label">Date</label>
        <div class="col-sm-2">
          <input type="text" name="date" class="form-control inputstl" 
		  id="date"   
		    value="<?php if(isset($_POST['choisir'])) echo $resu['datePresta'] ;?> ">
        </div>
      </div>
	  <!--Modification du 09/12/2021 -->
	  <div class="form-group">
	  <label for="date" class="col-sm-2 control-label">Date1</label>
		<div class="col-sm-1">
		
		<select id="jour" class="form-control" data-role="select-dropdown" >
			<option selected>--Jour--</option>
			<?php for ($i=1;$i<=31;$i++){ ?>
			<option value="<?php echo $i ?>"><?php echo $i ?></option>
			<?php } ?>
		</select>
		
		</div>
		<div class="col-sm-1">
		<input type="text" class="form-control inputstl"  
		value="<?php  echo date("m");?>" disabled="disabled">
		</div>
		
		<div class="col-sm-1">
		<input type="text" class="form-control inputstl"  
		 value="<?php  echo date("Y");?>" disabled="disabled">
		</div>
		</div>
	  
	  </div>
	  
	  
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" name="Ajouter"  id="bt1"
		  class="btn btn-primary">Ajouter</button>
          <button  type="submit" name="modifier"  
		  class="btn btn-success">Enregister les modification</button>
      </div>
	  <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
        </div>
      </div>
    </form>
   </div>

<?php

 $lfhf1 = new LigneFraisHorsForfait();
 $idVis = $_SESSION['id'];
 date_default_timezone_set('Europe/Paris');
 $datePresta = date("Y-m-d");
 $lfhf1->setVisiteur($idVis);
 $lfhf1->setdatePresta($datePresta);
 $lesLignesFHF = $lfhf1->tousFraisHorsForfait();
 //var_dump($lesLignesFHF ); exit();
 
?>
   <div class="container">
   <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Liste <b>12 2021</b></h2></div>
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
					    <th>#</th>
                        <th>Prestation Hors forfait</th>
                        <th>Date</th>
                        <th>Montant</th>
						<th>Actions</th>
                    
                    </tr>
                </thead>
                <tbody>
			<?php	while($laLigne = $lesLignesFHF->fetch(PDO::FETCH_ASSOC)){ ?>
		  <form method="POST" action="">
                    <tr>
						<td width=5%><input type="text" class="border-0" size="5"
						  name="IdPresta" value="<?php echo $laLigne['id']; ?>"></td> 
                        
						<td><?php echo $laLigne['prestation']; ?></td>
                        <td>
						<?php echo $laLigne['datePresta']; ?>
						</td>
                        <td><?php echo $laLigne['montant']; ?>
						</td>
                        <td class="text-center"><button type="submit"  
							id="choisir" name="choisir" 
				             class="btn btn-info glyphicon glyphicon-edit"></button>
				            <button type="submit" id="supp" name="Supprimer" 
				            class="btn btn-danger glyphicon glyphicon-trash"></button>
				        </td>
                    </tr>
                 </form>
                       <?php } 	?>      
                    </tbody>
            </table>
        </div>
		</div>
    </div>     
   
</body>
</html>