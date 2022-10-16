<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
?>
	<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->

	<section class="main" id="main">
		<div class="title">
			<h1>Stage</h1>
			<hr>
		</div>
		<p>Mon rapport de stage à Norsys (Juin 2021)</p>
		<div class="content">
			<iframe src="/common/files/RSW.pdf" title="RS Word">Rapport de stage Word</iframe>
			<iframe src="/common/files/RSP.pdf" title="RS PowerPoint">Rapport de stage PowerPoint</iframe>
		</div>
	</section>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
