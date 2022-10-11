<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
?>
<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->

<!-- Cette balise ne sert qu'à mettre un fond foncé par dessus le contenu lorsque le menu est ouvert -->
<div class="fade" id="fade"></div>
<section class="main" id="main">
	<h1>Veille technologique</h1>
	<p>Note: en cours de travaux.</p>
		<article>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/1184px-Vue.js_Logo_2.svg.png">
			<h1>Vue.js</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
				Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
				Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
				Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. 
				Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. 
				Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. 
				Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. 
				Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. 
			</p>
		</article>
		<article>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/590px-Node.js_logo.svg.png">
			<h1>Node.js</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
				Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
				Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
				Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. 
				Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. 
				Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. 
				Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. 
				Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. 
			</p>
		</article>
		<article>
			<img src="https://www.finelog-biseum.com/wp-content/uploads/2017/09/Logo-SQL-SERVER.png">
			<h1>SQL Server</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
				Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
				Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
				Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. 
				Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. 
				Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. 
				Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. 
				Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. 
			</p>
		</article>
		<article>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/800px-Visual_Studio_Code_1.35_icon.svg.png">
			<h1>VSCode</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
				Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
				Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
				Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. 
				Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. 
				Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. 
				Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. 
				Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. 
			</p>
		</article>
		<article>
			<img src="">
			<h1>Test sans image</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. 
				Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
				Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
				Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. 
				Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. 
				Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. 
				Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. 
				Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. 
			</p>
		</article>
</section>

<link href="/common/style/slideshow.css" type="text/css" rel="stylesheet">
<div class="slideshow fade">
	<div class="article">
		<div class="numbertext" id="pageNum"></div>
		<div class="picture">
			<img src="">
		</div>
		<h1></h1>
		<div class="description">
		</div>
	</div>

  <!-- <a class="prev" onclick="moveSlides(-1)">&#10094;</a>
  <a class="next" onclick="moveSlides(1)">&#10095;</a> -->
</div>

<script src="/common/js/slideshow.js"></script>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>
