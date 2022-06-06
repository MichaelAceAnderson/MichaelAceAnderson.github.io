<!DOCTYPE html>
<?php
session_start();
?>

<?php
require_once ('../model/ligneFraisAuForfait.php');

require_once ('../model/fraisForfait.php');
require_once ('../outils/lesOutils.php');
$lff = new LigneFraisAuForfait();
$idVis = $_SESSION['id'];
$lff->setVisiteur($idVis);
$recapLignesFrais=$lff->recapFraisAuForfait();
$recapTotal = $lff->totalFraisAuForfait();

?>
<html lang="en">
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

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<?php include("header.php") ;?> 


    <div class="container">
        <div class="table-responsive">
		
		
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
		</div>
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        
				
				<h2><?php echo "Mois/Année : ". substr($recapTotal["mois"],3,2)."-"
				.substr($recapTotal["mois"],0,4) ?></h2>
				
                       
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                           
                            <th>Libelle FF</th>
                            <th>Quantite</th>
							<th>Montant</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php 	
				
	      while($row = $recapLignesFrais->fetch(PDO::FETCH_ASSOC)){ ?>
		  
                     <tr>
                        
						<td><?php echo $row['libelle']; ?></td>
                        
                        <td><?php echo $row['quantite']; ?></td>
						<td><?php echo $row['montant']; ?></td>
						<td><?php echo $row['sousTotal']; ?></td>
                     
                    </tr>
               
                       <?php } 	?>      
                    </tbody>
                </table>
				
				

            </div>
			
			<button type="button" class="btn btn-primary btn-lg btn-block">
			<?php echo "Total Frais au Forfait : ". $recapTotal["total"] ?> </button>
        <br/>
		<br />
		<button type="button" class="btn btn-info">Génerer pdf</button>
		</div>        
    </div>     
</body>
</html>