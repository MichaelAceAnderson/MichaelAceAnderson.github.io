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
		<p>Voici la liste des travaux réalisés au cours de mon parcours.</p>
		
		<div class="content">
			<article>
				<img src="" alt="Image à venir">
				<h1>NewBlog</h1>
				<p>
					Mini-CMS destiné à créer un blog (fonctionne sans base de données et n'est pas sécurisé).
				</p>
			</article>
			<article>
				<img src="" alt="Image à venir">
				<h1>Portfolio</h1>
				<p>
					<i><q>Mais enfin les enfants ! On est dedans !</q></i>
				</p>
			</article>
		</div>
	</section>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/slideShow.php';
?>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
