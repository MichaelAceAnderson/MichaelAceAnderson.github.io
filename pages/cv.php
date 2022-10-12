<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
?>
	<section class="main" id="main">
		<h1>CV & Lettre de motivation</h1>
		<iframe src="/common/files/CV.pdf" width="48%" height="500px" title="CV"></iframe>
		<iframe src="/common/files/LM.pdf" width="48%" height="500px" title="Lettre de motivation"></iframe>
	</section>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
 ?>
