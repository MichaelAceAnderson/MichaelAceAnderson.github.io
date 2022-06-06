<?php
session_start();
?>
<?php
require ('../model/utilisateur.php');
require('../model/ligneFraisAuForfait.php');
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
<?php include("header.php") ;?> 
<div class="container">

<h1>Gestion Comptable</h1>
<?php	
     $util = new Utilisateur();
	 $lesUsers = $util->tousLesVisiteurs();?>

        
		  <form class="form-horizontal" role="form" method="POST" action="">
      <div class="form-group">
	  
        <label for="mois" class="col-sm-2 control-label">Mois:</label>
        <div class="col-sm-4">
		<select name="mois" class="form-control inputstl" id="mois">
		 <option value="">--Choisir le visiteur --</option>
           	
	         <?php  while($user = $lesUsers->fetch(PDO::FETCH_ASSOC)){ ?>
	        <option 
			value ="<?php echo $user['id'];?>"><?php 
			echo $user['nom']." ".$user['prenom']; ?></option>
			

		<?php } 	?> 
		</select>
		</div>
		</div>
		
		      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
         
          <button type="submit" name="chercher" 
		  class="btn btn-success">Chercher</button>
       
		 </div>
      </div>
		</form>
      
<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Montant</th>
	  <th>Validation</th>
	  <th>Date de modif</th>
	  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>Cedric</td>
      <td>Eric</td>
      <td>1230</td>
	  <td><select class="form-select" aria-label="Default select example">
			<option selected>Etat du frais</option>
			<option value="CL">Saisie clôturée</option>
			<option value="CR">Fiche créée, saisie en cours</option>
			<option value="MP">Mise en paiement</option>
			<option value="RM">Remboursée</option>
			<option value="RM">Validée</option>
		</select></td>
	  <td>08/12/2021</td>
    </tr>
    <tr>
      <th >2</th>
      <td>Cedric</td>
      <td>Eric</td>
      <td>480</td>
	  <td><select class="form-select" aria-label="Default select example">
			<option selected>Etat du frais</option>
			<option value="CL">Saisie clôturée</option>
			<option value="CR">Fiche créée, saisie en cours</option>
			<option value="MP">Mise en paiement</option>
			<option value="RM">Remboursée</option>
			<option value="RM">Validée</option>
		</select></td>
	   <td>08/11/2021</td>
    </tr>
    
  </tbody>
</table>

</div>


</body>
</html>



