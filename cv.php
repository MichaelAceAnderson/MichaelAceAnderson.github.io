<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include $_SERVER['DOCUMENT_ROOT'].'/assets/includes/head.php';
	include $_SERVER['DOCUMENT_ROOT'].'/assets/includes/header.php';
?>
	<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->
	<div class="fade" id="fade"></div>
	<section class="main" id="main">
		<h1>CV & Lettre de motivation</h1>
		<iframe src="assets/CV.pdf" width="48%" height="500px" title="CV"></iframe>
		<iframe src="assets/LM.pdf" width="48%" height="500px" title="Lettre de motivation"></iframe>
	</section>

<?php
	include $_SERVER['DOCUMENT_ROOT'].'/assets/includes/footer.php';
 ?>
