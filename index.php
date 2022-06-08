<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include 'assets/includes/head.php';
	include 'assets/includes/header.php';
?>
	<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->

	<!-- Cette balise ne sert qu'à mettre un fond foncé par dessus le contenu lorsque le menu est ouvert -->
	<div class="fade" id="fade"></div>
	<section class="main" id="main">
		<h1>Présentation</h1>
		<p>Prénom NOM, 20 ans</p>
		<p>Actuellement étudiant en développement et design d'applications et sites web dans le cadre d'un Brevet de Technicien Supérieur informatique,
		j'ai porté de l'intérêt à différents domaines dans lesquels j'ai répondu à mes besoins par les projets que j'ai choisi de répertorier sur ce portfolio.</p>
		<p>Si mes projets suscitent votre intérêt, il est possible de me contacter grâce aux informations dans la rubrique "Contact" 
		mais également de consulter mon CV et ma lettre de motivation dans la rubrique "CV".
		</p>
	</section>

<?php
	include 'assets/includes/footer.php';
?>
