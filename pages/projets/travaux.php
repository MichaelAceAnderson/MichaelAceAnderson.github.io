<?php

//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/head.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php';
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
			<img src="/common/img/wichat.jpg" alt="WiChat">
			<h1><a target="_blank" href="http://wichat.localhost">WiChat</a></h1>
			<h6>
				2022
			</h6>
			<p>
				Permet à des utilisateurs de tchatter de façon anonyme sans authentification
				<span class=" tags">#HTML #CSS #PHP #JS #Axios #MySQL #Git #UML</span>
			</p>
		</article>
		<article>
			<img src="/common/img/intrachat.jpg" alt="IntraChat">
			<h1>IntraChat</h1>
			<h6>
				2022
			</h6>
			<p>
				Projet en ligne de commandes permettant de tchatter entre ordinateurs partageant un même lecteur réseau
				<span class="tags">#Batch</span>
			</p>
		</article>
		<article>
			<img src="/common/img/TP_Banque.jpg" alt="TP_Banque">
			<h1>Gestion de portefeuille</h1>
			<h6>
				2022
			</h6>
			<p>
				Projet réalisé en cours de formation, permet la gestion de portefeuilles contenant des comptes clients (courant & épargne).
				<span class="tags">#Java #Git</span>
			</p>
		</article>
		<article>
			<img src="/common/img/GuessWhat.jpg" alt="GuessWhat">
			<h1>GuessWhat</h1>
			<h6>
				2022
			</h6>
			<p>
				Projet réalisé en cours de formation en ligne de commandes sous forme de jeu de carte à deviner.
				<span class="tags">#JS #NodeJS</span>
			</p>
		</article>
		<article>
			<img src="/common/img/portfolio.jpg" alt="Portfolio">
			<h1>Portfolio</h1>
			<h6>
				2021-2022
			</h6>
			<p>
				Présente vitrine de mes projets et de mon parcours qui vous permet également de <a href="/pages/contact.php">me contacter</a>
				<span class="tags">#HTML #CSS #PHP #JS #Git #Office #Graphisme</span>
			</p>
		</article>
		<article>
			<img src="/common/img/newblog.jpg" alt="NewBlog">
			<h1>NewBlog</h1>
			<h6>
				2016
			</h6>
			<p>
				Mini-CMS créé à l'âge de 14 ans permettant de créer un blog (obsolète, fonctionne sans base de données et n'est pas sécurisé).
				<span class="tags">#HTML #CSS #PHP</span>
			</p>
		</article>
		<article>
			<img src="/common/img/pluginfr.jpg" alt="PluginFR">
			<h1>PluginFR</h1>
			<h6>
				2016
			</h6>
			<p>
				Site réalisé à l'âge de 14 ans destiné au partage de plugins Minecraft traduits, disposant d'une interface admin d'upload et d'une interface de commentaires.
				<span class="tags">#HTML #CSS #PHP</span>
			</p>
		</article>
	</div>
</section>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/slideShow.php';
?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/footer.php';
?>