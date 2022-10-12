<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
?>
<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->

<section class="main" id="main">
	<h1>Veille technologique</h1>
	<p>Note: en cours de travaux.</p>
		<article>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/1184px-Vue.js_Logo_2.svg.png">
			<h1>Vue.js</h1>
			<p>
				Vue.js, est un framework JavaScript open-source utilisé pour construire des interfaces utilisateur et des applications web monopages.
				Vue a été créé par Evan You et est maintenu par lui et le reste des membres actifs de l'équipe principale travaillant sur le projet et son écosystème. 
			</p>
		</article><article>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/590px-Node.js_logo.svg.png">
			<h1>Node.js</h1>
			<p>
				Node.js est une plateforme logicielle libre en JavaScript, orientée vers les applications réseau évènementielles hautement concurrentes qui doivent pouvoir monter en charge.
				Elle utilise la machine virtuelle V8, la librairie libuv pour sa boucle d'évènements, et implémente sous licence MIT les spécifications CommonJS.
			</p>
		</article><article>
			<img src="https://www.finelog-biseum.com/wp-content/uploads/2017/09/Logo-SQL-SERVER.png">
			<h1>SQL Server</h1>
			<p>Microsoft SQL Server est un système de gestion de base de données en langage SQL incorporant entre autres un SGBDR développé et commercialisé par la société Microsoft.</p>
		</article><article>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/800px-Visual_Studio_Code_1.35_icon.svg.png">
			<h1>VSCode</h1>
			<p>
				Visual Studio Code est un éditeur de code extensible développé par Microsoft pour Windows, Linux et macOS. 
				Les fonctionnalités incluent la prise en charge du débogage, la mise en évidence de la syntaxe, la complétion intelligente du code, les snippets, la refactorisation du code et Git intégré.
			</p>
		</article><article>
			<img src="">
			<h1>Test sans image</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
				Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.
				Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
				Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. 
				Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue.
				Ut in risus volutpat libero pharetra tempor. 
				Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. 
				Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
				Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
				Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin.
				Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula.
				Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas.
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. 
				Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. 
				Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.
				Aliquam convallis sollicitudin purus. 
				Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. 
				Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. 
				Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. 
				Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, et ultricies lacus lorem varius purus. 
				Curabitur eu amet. 
			</p>
		</article>
</section>

<link href="/common/style/slideshow.css" type="text/css" rel="stylesheet">
<div class="slideshow fade">
  <a class="close" onclick="hideSlide()">&#10006;</a>
	<div class="slideFrame">
		<div class="numbertext" id="pageNum"></div>
		<div class="picture">
			<img src="">
		</div>
		<h1></h1>
		<div class="description">
		</div>
	</div>

  <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
  <a class="next" onclick="moveSlide(1)">&#10095;</a> -->
</div>

<script src="/common/js/slideshow.js"></script>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
