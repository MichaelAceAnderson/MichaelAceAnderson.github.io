<!DOCTYPE html>
<?php
session_start();
?>

<?php
require ('../model/ligneFraisAuForfait.php');
//require ('../model/fraisForfait.php');
require ('../outils/lesOutils.php');
$lff = new LigneFraisAuForfait();
$idVis = $_SESSION['id'];
$lff->setVisiteur($idVis);
date_default_timezone_set('Europe/London');
$lff->setMois(date("Ym"));
$lesLignesFrais=$lff->listeFraisAuForfait();

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
<body background=
"https://media.geeksforgeeks.org/wp-content/uploads/rk.png">
<?php include("header.php") ;
 require("frmAjouterLignneFraisAuForfait.php");

?> 


    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Frais <b>Details</b></h2></div>

                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Prestation</th>
							<th>Mois</th>
                            <th>Quantite</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php 	
					//année courante
				$annee = date("Y");
				//$annee="2021";
				//parcourir le tableau $lesLignesFrais
	      while($row = $lesLignesFrais->fetch(PDO::FETCH_ASSOC)){ ?>
		  <form method="POST" action="" >
                     <tr>
						<td width=5%><input type="text" class="border-0" size="5"
						  name="IdPresta" value="<?php echo $row['id']; ?>"></td> 
                        
						<td width=25%><?php echo $row['libelle']; ?></td>
                        <td width=20%>
						<?php echo lemoisEnclaire(substr($row['mois'],4,2))." ".$annee;?>
						</td>
                        <td width=20%><?php echo $row['quantite']; ?>
						</td>
                        <td width=30% class="text-center"><button type="submit"  
							id="choisir" name="choisir" onclick="return visibleUpdate()"
				             class="btn btn-info glyphicon glyphicon-edit"
							 ><span><strong>Selectionner</strong></span></button>
				            <button type="submit" id="supp" name="Supprimer" 
				            class="btn btn-danger glyphicon glyphicon-trash"
							onclick="return ConfirmDelete()" >
							<span><strong>Supprimer</strong></span> </button>
							
							
				        
                    
    
						</td>
                    </tr>
                 </form>
                       <?php } 	?>      
                    </tbody>
                </table>

            </div>
        </div>        
    </div> 

      <script>
      function ConfirmDelete(){
		  	  
    if (confirm("suprimmer LFF?")){
          return true;
    }
    else {
       
       return false;
    }
} 


  </script>
  
  <script>		function visibleUpdate() {
			         document.getElementById('$_POST['idAjout']').disabled = false;
		}
		</script>
</body>
</html>