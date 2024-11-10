<?php

include_once STRUCTURE_DIR . '/head.php';
include_once STRUCTURE_DIR . '/header.php';
?>

<section class="main" id="main">
	<div class="title">
		<h1>Contact</h1>
		<hr>
	</div>
	<div class="content">
		<form action="#" method="post" class="contact">
			<h1>Envoyer un message</h1>
			<?php
			if (isset($_POST["submit"])) {
				if (empty($_POST["mail"])) {
					echo	'<div class="response error">
										L\'adresse mail ne peut pas être vide !
									</div>';
				} elseif (empty($_POST["msg"])) {
					echo	'<div class="response error">
										Le message doit comporter un contenu !
									</div>';
				} else {
					$mail = $_POST["mail"];
					//Ajouter traitement regEx mail
					$msg = $_POST["msg"];

					$msgFile = fopen($_SERVER['DOCUMENT_ROOT'] . "/files/message.txt", "a+") or die("Impossible d'envoyer le message");
					fwrite($msgFile, $mail . ": " . $msg . "\n");
					fclose($msgFile);
					echo	'<div class="response success">
										<h3>Votre adresse:</h3>' . htmlentities($mail) . '
										<h3>Message envoyé:</h3>' . htmlentities($msg) . '
									</div>';
				}
			}
			?>
			<input type="text" name="mail" placeholder="Votre e-mail ou pseudo" />
			<textarea placeholder="Votre message" name="msg"></textarea>
			<button type="submit" name="submit">Envoyer</button>
		</form>
	</div>
</section>

<?php
include_once STRUCTURE_DIR . '/footer.php';
?>