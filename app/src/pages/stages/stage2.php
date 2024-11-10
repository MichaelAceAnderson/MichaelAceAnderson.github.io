<?php
include_once STRUCTURE_DIR . '/head.php';
include_once STRUCTURE_DIR . '/header.php';

$slides = [
	[
		"src" => "/img/RSP2/RSP2-01.jpg",
		"alt" => "Sommaire",
		"title" => "Sommaire"
	],
	[
		"src" => "/img/RSP2/RSP2-02.jpg",
		"alt" => "L'entreprise dans la société",
		"title" => "L'entreprise dans la société"
	],
	[
		"src" => "/img/RSP2/RSP2-03.jpg",
		"alt" => "La structure de l'entreprise",
		"title" => "La structure de l'entreprise"
	],
	[
		"src" => "/img/RSP2/RSP2-04.jpg",
		"alt" => "Recherche et développement (Recherche fondamentale)",
		"title" => "Recherche et développement (Recherche fondamentale)"
	],
	[
		"src" => "/img/RSP2/RSP2-05.jpg",
		"alt" => "ChatGPT, qu'est-ce que c'est ?",
		"title" => "ChatGPT, qu'est-ce que c'est ?"
	],
	[
		"src" => "/img/RSP2/RSP2-06.jpg",
		"alt" => "La particularité de ChatGPT",
		"title" => "La particularité de ChatGPT"
	],
	[
		"src" => "/img/RSP2/RSP2-07.jpg",
		"alt" => "Conclusion (Recherche fondamentale)",
		"title" => "Conclusion (Recherche fondamentale)"
	],
	[
		"src" => "/img/RSP2/RSP2-08.jpg",
		"alt" => "Recherche et développement (Recherche appliquée)",
		"title" => "Recherche et développement (Recherche appliquée)"
	],
	[
		"src" => "/img/RSP2/RSP2-09.jpg",
		"alt" => "Conclusion (Recherche appliquée)",
		"title" => "Conclusion (Recherche appliquée)"
	],
	[
		"src" => "/img/RSP2/RSP2-10.jpg",
		"alt" => "Bilan du stage",
		"title" => "Bilan du stage"
	]
];
?>
<section class="main" id="main">
	<div class="title">
		<h1>Stage</h1>
		<hr>
	</div>
	<p>Mon rapport de stage à Norsys (Février-Mars 2023)</p>
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