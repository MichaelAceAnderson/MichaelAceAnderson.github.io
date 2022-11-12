<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
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
	
	<section class="main" id="main">
		<div class="title">
			<h1>À propos</h1>
			<hr>
		</div>
		
		<div class="content">
			<p>
				Page contenant mon CV HTML
			</p>
		</div>
		
	</section>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
