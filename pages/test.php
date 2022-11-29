<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
?>
	<style>
		button {
			color: white;
			background: var(--lighter);
			border: 5px solid var(--lighter);
			border-radius: 0;
			font-size: 20px;
			padding: 30px;
			display: inline;
			margin: 5px auto 5px auto;
			transition: 0.5s;
			font-family: "Agency FB", sans-serif;
		}

		button:hover {
			background: rgb(23 24 25);
			border: 5px solid var(--lighter2);
			cursor: pointer;
			transition: 1s;
		}

		button:active {
			background: radial-gradient(rgb(40 40 40), rgb(23 24 25));
			transition: 1s;
		}
	</style>
	<!-- Contenu de la page -->
	<section class="main" id="main">
		<div class="title">
			<h1>Page de tests</h1>
			<hr>
		</div>
		<div class="content">
			<button>Bouton test</button>
		</div>
	</section>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/slideShow.php';
?>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
?>
	<style>
		/* CV */
		button {
			color: white;
			background: var(--lighter);
			border: 5px solid var(--lighter);
			border-radius: 0;
			font-size: 20px;
			padding: 30px;
			display: inline;
			margin: 5px auto 5px auto;
			transition: 0.5s;
			font-family: "Agency FB", sans-serif;
		}

		button:hover {
			background: rgb(23 24 25);
			border: 5px solid var(--lighter2);
			cursor: pointer;
			transition: 1s;
		}

		button:active {
			background: radial-gradient(rgb(40 40 40), rgb(23 24 25));
			transition: 1s;
		}

		/* Arbre CV */
		.tree {
		background: dodgerblue;
		height: 80%;
		display: inline-block;
		width: 10px;
		}
		.year{
			line-height: 50px;
		}
		.branch{
			background: dodgerblue;
			position: relative;
			height: 5px;
			width: 140px;
			margin: 50px 0;
			font-size: 15px;
		}
		.branch.right{
			right: 2px;
			transform: rotateZ(30deg);
		}
		.branch.left{
			right: 128px;
			transform: rotateZ(-30deg);
		}
	</style>
	<!-- Contenu de la page -->
	<section class="main" id="main">
		<div class="title">
			<h1>Page de tests</h1>
			<hr>
		</div>
		<div class="content">
			<!-- Test bouton -->
			<button>Bouton test</button>
			<!-- Test arbre CV -->
			<div class="tree">
					<div class="branch left">
						Expérience
					</div>
					<div class="year">2022</div>
					<div class="branch right">
						Réparations informatiques
					</div>
					<div class="branch left">
						Soutien scolaire
					</div>
					<div class="year">2021</div>
					<div class="branch left">
						Bac Économique & Social [Mention Assez Bien]
					</div>
					<div class="year">2018</div>
					<div class="branch right">
						Stage Norsys Paris -> Maquette web (gestion planning employés)
					</div>
					<div class="branch left">
						Brevet [Mention Bien]
					</div>
				<div class="year">2015</div>
			</div>
		</div>
	</section>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/slideShow.php';
?>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
