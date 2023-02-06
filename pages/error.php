<!DOCTYPE html>
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/common/includes/head.php"); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/common/includes/header.php"); ?>

<body>

	<?php if (!(isset($_GET['static']) && $_GET['static'] == false)) {
		header("Refresh:5; url=/");
		echo '<META http-equiv="refresh" content="5; URL=/">';
	} ?>
	<center class="main">
		<h1 class="response error">
			<?php
			if (isset($_GET['error'])) {
				$error = $_GET['error'];
			} else {
				$error = "";
			}
			echo "Erreur $error: <br>";
			switch ($error) {
				case '400':
					echo 'Échec de l\'analyse HTTP !';
					break;

				case '401':
					echo 'Le pseudo ou le mot de passe n\'est pas correct !';
					break;

				case '402':
					echo 'Le client doit reformuler sa demande avec les bonnes données de paiement!';
					break;

				case '403':
					echo 'Acces interdit !';
					break;

				case '404':
					echo 'La page n\'existe pas ou plus !';
					break;

				case '405':
					echo 'Méthode non autorisée!';
					break;

				case '406':
					echo 'La requête n\'a pas pu aboutir a temps !';
					break;

				case '500':
					echo 'Erreur interne au serveur ou serveur saturé !';
					break;

				case '501':
					echo 'Le serveur ne supporte pas le service demandé !';
					break;

				case '502':
					echo 'Mauvaise passerelle !';
					break;

				case '503':
					echo ' Service indisponible !';
					break;

				case '504':
					echo 'Trop de temps à la réponse !';
					break;

				case '505':
					echo 'Version HTTP non supportée! ';
					break;

				default:
					echo 'Erreur inconnue !';
			}
			if (!(isset($_GET['static']) && $_GET['static'] == false)) {
				echo '<br>Vous allez être redirigé vers la page d\'accueil dans 5 secondes.';
			}

			?>
		</h1>
	</center>
	<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/common/includes/footer.php"); ?>