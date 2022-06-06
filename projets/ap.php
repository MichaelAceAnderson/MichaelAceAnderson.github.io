<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include $_SERVER['DOCUMENT_ROOT'].'/assets/includes/head.php';
	include $_SERVER['DOCUMENT_ROOT'].'/assets/includes/header.php';
?>
	<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->

	<!-- Cette balise ne sert qu'à mettre un fond foncé par dessus le contenu lorsque le menu est ouvert -->
	<div class="content" id="content"></div>
	<section class="main" id="main">
		<h1>Atelier Pro</h1>
		<p>Pas disponible pour le moment.</p>
	</section>

<?php
	include $_SERVER['DOCUMENT_ROOT'].'/assets/includes/footer.php';
?>
