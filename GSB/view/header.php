<!DOCTYPE html>
<?php
require_once ('../outils/lesOutils.php');
?>
<html lang="en">
<head>
    <title>GSB - N2F</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .bcontent {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid bcontent">
        
        <nav class="navbar navbar-expand-sm  navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">GSB - N2F</a>
            <ul class="navbar-nav">
                
                <li class="nav-item">
                   <a class="nav-link" href="frmLigneFraisAuForfait.php">Frais Au Forfait</a>
                </li>
			
                <li class="nav-item">
                     <a class="nav-link" href="frmLigneFraisHorsForfait.php">Frais Hors Forfait</a>
                </li>
				<li class="nav-item">
                     <a class="nav-link" href="frmRecapLigneFraisAuForfait.php">Liste de Frais au Forfait</a>
                </li>
				
				<li class="nav-item">
                     <a class="nav-link" href="#">
					<b> <?php echo "Bonjour ". $_SESSION["nom"]." ".$_SESSION["prenom"]; ?></a></b>
                </li>
				
				
				<li class="nav-item">
                     <a class="nav-link" href="#">
					<b> 				<?php setlocale(LC_TIME, 'fr_FR');
						date_default_timezone_set('Europe/Paris');
							echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));
					?></a></b>
                </li>

   
				
				
				<li class="nav-item">
                     <a class="nav-link" href="../seDeconnecter.php">Se Déconnecter</a>
                </li>
            </ul>
        </nav>
    </div>
	
</body>
</html>