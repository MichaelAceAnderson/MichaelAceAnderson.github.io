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
		<p>Mon rapport de stage à Norsys (Févier-Mars 2023)</p>
		<div class="content">
			<article class="no-align">
				<img src="/common/img/RSP/RSP2-01.png" alt="Sommaire" title="Sommaire">
				<h1>Sommaire</h1>
			</article>
			<div class="title">
				<h1>Compte-rendu Word</h1>
				<hr>
			</div>
			<iframe src="/common/files/RSW2.pdf" title="RS Word">Rapport de stage Word</iframe>
			<div class="title">
				<h1>Compte-rendu PowerPoint en PDF</h1>
				<hr>
			</div>
			<iframe src="/common/files/RSP2.pdf" title="RS PowerPoint">Rapport de stage PowerPoint</iframe>
		</div>
	</section>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/slideShow.php';
?>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
