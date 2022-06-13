<?php

	//Les include_onces permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/include_onces/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/include_onces/header.php';
?>
	<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->
	
	<?php
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["mail"])) $error = "L'adresse mail ne peut pas être vide !";
		elseif(empty($_POST["msg"])) $error = "Le message doit comporter un contenu !";
		else
		{
			$mail = $_POST["mail"];
			$msg = $_POST["msg"];
			$error = false;
		}
	}
	?>
	
	<!-- Cette balise ne sert qu'à mettre un fond foncé par dessus le contenu lorsque le menu est ouvert -->
	<div class="fade" id="fade"></div>
	<section class="main" id="main">
		<h1>Contact</h1>
		<form action="#" method="post">
			<h1>Envoyer un message</h1>
			<?php
				if(isset($error))
				{
					if($error) echo '<p class="error">'.$error.'</p>'; 
					elseif(!$error) echo '<div class="success"><h3>Votre adresse:</h3>'.htmlentities($mail).'<h3>Message envoyé:</h3>'.htmlentities($msg).'<p>Note: cette fonction n\'envoie pas encore le message au destinataire.</p></div>';
				}
			?>
			<input type="text" name="mail" placeholder="Votre e-mail"/>
			<textarea placeholder="Votre message" name="msg"></textarea>
			<button type="submit" name="submit">Envoyer</button>
		</form>
		
	</section>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/include_onces/footer.php';
?>
