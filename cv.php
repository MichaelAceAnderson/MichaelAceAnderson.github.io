<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include './assets/includes/head.php';
	include './assets/includes/header.php';
?>
	<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->
	<div class="content" id="content"></div>
	<section class="main" id="main">
		<h1>CV & Lettre de motivation</h1>
		<iframe src="./assets/CV.pdf" width="48%" height="500px" title="CV"></iframe>
		<iframe src="./assets/LM.pdf" width="48%" height="500px" title="Lettre de motivation"></iframe>
	</section>

<?php
	include './assets/includes/footer.php';
 ?>
