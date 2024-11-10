<!DOCTYPE html>
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<?php 
include_once STRUCTURE_DIR . '/head.php';
include_once STRUCTURE_DIR . '/header.php'; 
?>

<body>
	<div class="main">
		<div class="notification error">
			<?php 
			if (!isset($_GET['static']) || $_GET['static'] == false) {
				if (!headers_sent()) {
					header("Refresh:5; url=/");
				}
				echo '<META http-equiv="refresh" content="5; URL=/">';
			} 
		
			if (isset($_GET['error'])) {
				$error = $_GET['error'];
			} else {
				$error = "";
			}
			echo "<h1>Erreur $error:</h1>";
			switch ($error) {
				case '400':
					$error = 'Échec de l\'analyse HTTP !';
					break;

				case '401':
					$error = 'Le pseudo ou le mot de passe n\'est pas correct !';
					break;

				case '402':
					$error = 'Le client doit reformuler sa demande avec les bonnes données de paiement!';
					break;

				case '403':
					$error = 'Acces interdit !';
					break;

				case '404':
					$error = 'La page n\'existe pas ou plus !';
					break;

				case '405':
					$error = 'Méthode non autorisée!';
					break;

				case '406':
					$error = 'La requête n\'a pas pu aboutir a temps !';
					break;

				case '500':
					$error = 'Erreur interne au serveur ou serveur saturé !';
					break;

				case '501':
					$error = 'Le serveur ne supporte pas le service demandé !';
					break;

				case '502':
					$error = 'Mauvaise passerelle !';
					break;

				case '503':
					$error = ' Service indisponible !';
					break;

				case '504':
					$error = 'Trop de temps à la réponse !';
					break;

				case '505':
					$error = 'Version HTTP non supportée! ';
					break;

				default:
					$error = 'Erreur inconnue !';
			}
			echo "<p>$error</p>";
			if (!isset($_GET['static']) || $_GET['static'] == false) {
				echo '<br>Vous allez être redirigé vers la page d\'accueil dans 5 secondes...
				<br>Si la redirection ne fonctionne pas, cliquez sur ce lien: <a href="/">Accueil</a>';
			}

			?>
		</div>
	</div>
	<?php include_once STRUCTURE_DIR . '/footer.php'; ?>