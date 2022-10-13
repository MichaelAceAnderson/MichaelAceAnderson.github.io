<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
?>
	<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->

	<section class="main" id="main">
		<div class="title">
			<h1>Projets</h1>
			<hr>
		</div>
		<p>Voici la liste des travaux réalisés au cours de ma formation.</p>
		<article>
			<img src="">
			<h1>Banque</h1>
			<p>
				Projet de gestion de comptes Java.
			</p>
		</article>
	</section>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
