	<script src="/assets/includes/utils.js"></script>
	
	<!-- Ici se touve l'entête  -->
	<header>
		<a href="#"><h1>Portfolio</h1></a>
	</header>
	<!-- Menu de gauche -->
	<div id="menu" class="menu" style="width: 0px;">
	<!-- Bouton contrôle menu -->
	<div class="disp" id="toggle" onclick="sideMenu()">☰</div>
		<div class="profile">
			<img src="/assets/img/profile.jpg" alt="Photo de profil"/>
			<div class="infos">
				<h1>Prénom NOM</h1>
				<h3>BTS SIO1</h3>
			</div>
		</div>
		<!-- Menu des liens  -->
		<div class="links">
			<a href="/">Accueil</a>
			<a href="/cv.php">CV</a>
			<div>
				<a onclick="dropDownAnimate(this);">Projets <span class="dropdown">▿</span></a>
				<!-- Sous-menu -->
				<div class="submenu closed" style="display: none;">
					<a href="/projets/stage.php">Stage</a>
					<a href="/projets/ap.php">Atelier Pro</a>
					<a href="/projets/tp.php">TP</a>
				</div>
			</div>
			<div>
				<a onclick="dropDownAnimate(this);">Veilles <span class="dropdown">▿</span></a>
				<div class="submenu closed" style="display: none;">
					<a href="/vt.php">Veille technologique</a>
					<a href="/vj.php">Veille juridique</a>
				</div>
			</div>
			<a href="/contact.php">Contact</a>
		</div>
	</div>
