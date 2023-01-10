	<?php
	$nomComplet = "Prénom NOM";
	$age = date_diff(date_create("13-07-2001"), date_create(date("Y-m-d")))->format('%y') . ' ans';
	?>
	<!-- En-tête  -->
	<header>
	    <a href="#">
	        <h1>Portfolio</h1>
	    </a>
	</header>
	<!-- Cette balise ne sert qu'à mettre un fond foncé par dessus le contenu lorsque le menu est ouvert -->
	<div class="cover"></div>
	<!-- Menu de gauche -->
	<div class="menu">
	    <!-- Bouton affichage menu -->
	    <div class="menu-btn close" onclick="sideMenu()">☰</div>
	    <div class="profile">
	        <img src="/common/img/profile.jpg" alt="Photo de profil" />
	        <div class="infos">
	            <h1><?php echo $nomComplet; ?></h1>
	            <h2><?php echo $age; ?></h2>
	            <h2>BTS SIO</h2>
	        </div>
	    </div>
	    <!-- Menu des liens  -->
	    <div class="links">
	        <a href="/">Accueil</a>
	        <div>
	            <a href="#" onclick="subMenu(this);">Projets <span class="dropdown">▿</span></a>
	            <!-- Sous-menu -->
	            <div class="submenu closed">
	                <a href="/pages/projets/stage.php">Stage</a>
	                <a href="/pages/projets/travaux.php">Travaux</a>
	            </div>
	        </div>
	        <a href="/pages/veille.php">Veille informationnelle</a>
	        <a href="/pages/contact.php">Contact</a>
	    </div>
	</div>
	</div>