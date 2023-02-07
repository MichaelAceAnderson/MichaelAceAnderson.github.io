<?php

	//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/head.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/header.php';
?>
<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->

<section class="main" id="main">
    <div class="title">
        <h1>À propos</h1>
        <hr>
    </div>

    <div class="content">
        <p>
            Ce site a été réalisé entièrement avec HTML5, CSS3, JavaScript ES 2020. Sans Framework. À la mano. Et ça
            c'est la classe.
        </p>
        <img src="https://i.kym-cdn.com/entries/icons/original/000/028/021/work.jpg" />
    </div>

</section>

<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/common/includes/footer.php';
?>