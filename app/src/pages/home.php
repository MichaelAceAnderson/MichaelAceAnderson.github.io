<?php

include_once STRUCTURE_DIR . '/head.php';
include_once STRUCTURE_DIR . '/header.php';

$articles = [
	[
		"id" => "SAO",
		"img" => "/img/projects/SAOBanner.png",
		"link" => "",
		"title" => "San Andreas Online",
		"date" => "2023",
		"tags" => "#Pawn #Git",
		"description" => "Continuation de <a href=\"#SAObeta\">San Andreas Online</a> avec des bonnes pratiques, de la documentation et du versioning en mode projet."
	],
	[
		"id" => "NewBlog2",
		"img" => "/img/projects/NewBlog2.gif",
		"link" => "https://github.com/MichaelAceAnderson/NewBlog",
		"title" => "NewBlog 2.0",
		"date" => "2023",
		"tags" => "#HTML #CSS #JS #Axios #PHP #SQL #Git #UML #Docker #Apache #Nginx #PGSQL #Adminer #GitHubCo-Pilot",
		"description" => "Mini-CMS permettant de créer un blog, avec une base de données PostGreSQL (bientôt compatible autres SGBD). Ce projet est une réécriture complète de <a href=\"#NewBlog\">NewBlog</a> qui vise à inclure toutes mes compétences acquises en développement web, avec un maximum de bonnes pratiques en mode projet."
	],
	[
		"id" => "IntroDocker",
		"img" => "/img/projects/IntroDocker.jpg",
		"link" => "https://github.com/MichaelAceAnderson/IntroDocker",
		"title" => "IntroDocker",
		"date" => "2023",
		"tags" => "#Docker #HTML #PHP #Nginx #MariaDB #Adminer #Bash #WSL #Linux #GitHubCo-Pilot",
		"description" => "Projet documenté d'introduction à la technologie Docker, via la mise en place d'un serveur web complet."
	],
	[
		"id" => "WiChat",
		"img" => "/img/projects/WiChat.jpg",
		"link" => "https://github.com/WiChatApp/wc-front-svelte",
		"title" => "WiChat",
		"date" => "2022",
		"tags" => "#HTML #CSS #PHP #JS #Axios #MySQL #PGSQL #Git #UML",
		"description" => "Permet à des utilisateurs de tchatter de façon anonyme sans authentification."
	],
	[
		"id" => "IntraChat",
		"img" => "/img/projects/IntraChat.jpg",
		"link" => "",
		"title" => "IntraChat",
		"date" => "2022",
		"tags" => "#Batch #Bash",
		"description" => "Projet en ligne de commandes permettant de tchatter entre ordinateurs partageant un même lecteur réseau."
	],
	[
		"id" => "TP_Banque",
		"img" => "/img/projects/TP_Banque.jpg",
		"link" => "",
		"title" => "Gestion de portefeuille",
		"date" => "2022",
		"tags" => "#Java #Git",
		"description" => "Projet réalisé en cours de formation, permet la gestion de portefeuilles contenant des comptes clients (courant & épargne)."
	],
	[
		"id" => "Guesswhat",
		"img" => "/img/projects/GuessWhat.jpg",
		"link" => "",
		"title" => "GuessWhat",
		"date" => "2022",
		"tags" => "#JS #NodeJS",
		"description" => "Projet réalisé en cours de formation en ligne de commandes sous forme de jeu de carte à deviner."
	],
	[
		"id" => "Portfolio",
		"img" => "/img/projects/Portfolio.jpg",
		"link" => "/",
		"title" => "Portfolio",
		"date" => "2021-2022",
		"tags" => "#HTML #CSS #PHP #JS #Git #Office #Graphisme",
		"description" => "Présente vitrine de mes projets et de mon parcours qui vous permet également de <a href=\"/contact\">me contacter</a>."
	],
	[
		"id" => "SAObeta",
		"img" => "/img/projects/SAOLogo.png",
		"link" => "",
		"title" => "San Andreas Online beta",
		"date" => "2017-2019",
		"tags" => "#Pawn",
		"description" => "Mode de jeu écrit en pawn fonctionnant sur un serveur Grand Theft Auto San Andreas Multiplayer."
	],
	[
		"id" => "NewBlog",
		"img" => "/img/projects/NewBlog.jpg",
		"link" => "#NewBlog2",
		"title" => "NewBlog",
		"date" => "2016",
		"tags" => "#HTML #CSS #PHP",
		"description" => "Mini-CMS permettant de créer un blog (obsolète, fonctionne sans base de données et n'est pas sécurisé)."
	],
	[
		"id" => "PluginFR",
		"img" => "/img/projects/PluginFR.jpg",
		"link" => "",
		"title" => "PluginFR",
		"date" => "2016",
		"tags" => "#HTML #CSS #PHP",
		"description" => "Site destiné au partage de plugins Minecraft traduits, disposant d'une interface admin d'upload et d'une interface de commentaires."
	],
	[
		"id" => "NewCraft",
		"img" => "/img/projects/NewCraft.png",
		"link" => "",
		"title" => "NewCraft",
		"date" => "2015-2016",
		"tags" => "#YAML #Java #Batch",
		"description" => "Serveur de jeu Minecraft fonctionnant avec des plugins écrits en Java et configurés en YAML."
	]
];
?>

<section class="main" id="main">
	<div class="title">
		<h1>Présentation</h1>
		<hr>
	</div>
	<p>Actuellement ingénieur de développement (2024), je cherche à participer à la transition numérique et écologique en apportant des considérations durables et éthiques dans mes <a href="/projets">projets</a>.</p>
	<p>Si mes projets ou mon profil suscitent votre intérêt, il est possible de me contacter grâce aux informations dans la rubrique "Contact".</p>
	
	<div class="title">
		<h1>Projets</h1>
		<hr>
	</div>
	<p>Voici la liste des travaux réalisés au cours de mon parcours personnel, scolaire et professionnel.</a></p>

	<div class="content">
		<?php
		foreach ($articles as $article) {
			echo '<article id="' . $article['id'] . '">';
			echo '<img src="' . $article['img'] . '" alt="' . $article['title'] . '">';
			echo '<h1>';
			echo $article['link'] ? '<a href="' . $article['link'] . '">' . $article['title'] . '</a>' : $article['title'];
			echo '</h1>';
			echo '<h6>' . substr($article['date'], 0, 4) . ' (' . date_diff(
				date_create(PORTFOLIO_OWNER_BIRTHDAY),
				date_create(substr($article['date'], 0, 4) . '-01-01')
			)
				->format('%y') . ' ans' . ')</h6>';
			echo '<p>' . $article['description'] . '<span class="tags">' . $article['tags'] . '</span></p>';
			echo '</article>';
		}
		?>
	</div>
</section>

<?php
include_once STRUCTURE_DIR . '/slideShow.php';

include_once STRUCTURE_DIR . '/footer.php';
?>