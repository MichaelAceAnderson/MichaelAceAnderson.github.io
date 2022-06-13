<?php

	//Les include_onces permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/include_onces/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/include_onces/header.php';
?>
	<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->

	<!-- Cette balise ne sert qu'à mettre un fond foncé par dessus le contenu lorsque le menu est ouvert -->
	<div class="fade" id="fade"></div>
	<section class="main" id="main">
		<h1>Travaux pratiques</h1>
		<p>Pas disponible pour le moment.</p>
	</section>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/include_onces/footer.php';
?>
