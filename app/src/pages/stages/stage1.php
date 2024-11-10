<?php
include_once STRUCTURE_DIR . '/head.php';
include_once STRUCTURE_DIR . '/header.php';

$slides = [
	[
		"src" => "/img/RSP/RSP-01.jpg",
		"alt" => "Sommaire",
		"title" => "Sommaire"
	],
	[
		"src" => "/img/RSP/RSP-02.jpg",
		"alt" => "Présentation de l'entreprise",
		"title" => "Présentation de l'entreprise"
	],
	[
		"src" => "/img/RSP/RSP-03.jpg",
		"alt" => "Un nouveau modèle d'entrepreneuriat",
		"title" => "Un nouveau modèle d'entrepreneuriat"
	],
	[
		"src" => "/img/RSP/RSP-04.jpg",
		"alt" => "Les principes de Norsys",
		"title" => "Les principes de Norsys"
	],
	[
		"src" => "/img/RSP/RSP-05.jpg",
		"alt" => "La permaentreprise chez Norsys",
		"title" => "La permaentreprise chez Norsys"
	],
	[
		"src" => "/img/RSP/RSP-06.jpg",
		"alt" => "La structure de l'entreprise",
		"title" => "La structure de l'entreprise"
	],
	[
		"src" => "/img/RSP/RSP-07.jpg",
		"alt" => "Les interviews",
		"title" => "Les interviews"
	],
	[
		"src" => "/img/RSP/RSP-08.jpg",
		"alt" => "Méthode de développement",
		"title" => "Méthode de développement"
	],
	[
		"src" => "/img/RSP/RSP-09.jpg",
		"alt" => "Le système d'information",
		"title" => "Le système d'information"
	],
	[
		"src" => "/img/RSP/RSP-10.jpg",
		"alt" => "Ma mission",
		"title" => "Ma mission"
	],
	[
		"src" => "/img/RSP/RSP-11.jpg",
		"alt" => "Le résultat",
		"title" => "Le résultat"
	],
	[
		"src" => "/img/RSP/RSP-12.jpg",
		"alt" => "Conclusion",
		"title" => "Conclusion"
	]
];
?>
<section class="main" id="main">
	<div class="title">
		<h1>Stage</h1>
		<hr>
	</div>
	<p>Mon rapport de stage à Norsys (Juin 2022)</p>
	<div class="content">
		<?php
		foreach ($slides as $slide) {
			echo '<article class="no-align">';
			echo '<img src="' . $slide["src"] . '" alt="' . $slide["alt"] . '" title="' . $slide["title"] . '">';
			echo '<h1>' . $slide["title"] . '</h1>';
			echo '</article>';
		}
		?>
	</div>
</section>
<?php
include_once STRUCTURE_DIR . '/slideShow.php';

include_once STRUCTURE_DIR . '/footer.php';
?>