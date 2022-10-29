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
			<article class="no-align">
				<img src="/common/img/RSP/RSP-01.png" alt="Sommaire" title="Sommaire">
				<h1>Sommaire</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-02.png" alt="Présentation de l'entreprise" title="Présentation de l'entreprise">
				<h1>Présentation de l'entreprise</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-03.png" alt="Un nouveau modèle d'entrepreneuriat" title="Un nouveau modèle d'entrepreneuriat">
				<h1>Un nouveau modèle d'entrepreneuriat</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-04.png" alt="Les principes de Norsys" title="Les principes de Norsys">
				<h1>Les principes de Norsys</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-05.png" alt="La permaentreprise chez Norsys" title="La permaentreprise chez Norsys">
				<h1>La permaentreprise chez Norsys</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-06.png" alt="La structure de l'entreprise" title="La structure de l'entreprise">
				<h1>La structure de l'entreprise</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-07.png" alt="Les interviews" title="Les interviews">
				<h1>Les interviews</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-08.png" alt="Méthode de développement" title="Méthode de développement">
				<h1>Méthode de développement</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-09.png" alt="Le système d'information" title="Le système d'information">
				<h1>Le système d'information</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-10.png" alt="Ma mission" title="Ma mission">
				<h1>Ma mission</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-11.png" alt="Le résultat" title="Le résultat">
				<h1>Le résultat</h1>
			</article>
			<article class="no-align">
				<img src="/common/img/RSP/RSP-12.png" alt="Conclusion" title="Conclusion">
				<h1>Conclusion</h1>
			</article>
			<div class="title">
				<h1>Compte-rendu Word</h1>
				<hr>
			</div>
			<iframe src="/common/files/RSW.pdf" title="RS Word">Rapport de stage Word</iframe>
			<div class="title">
				<h1>Compte-rendu PowerPoint en PDF</h1>
				<hr>
			</div>
			<iframe src="/common/files/RSP.pdf" title="RS PowerPoint">Rapport de stage PowerPoint</iframe>
		</div>
	</section>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/slideshow.php';
?>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
