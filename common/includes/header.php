	
	<!-- En-tête  -->
	<header>
		<a href="#"><h1>Portfolio</h1></a>
	</header>
	<!-- Menu de gauche -->
	<div id="menu" class="menu" style="width: 0px;">
	<!-- Bouton affichage menu -->
	<div class="disp" id="toggle" onclick="sideMenu()">☰</div>
		<div class="profile">
			<img src="/common/img/profile.jpg" alt="Photo de profil"/>
			<div class="infos">
				<h1>Prénom NOM</h1>
				<h3>BTS SIO1</h3>
			</div>
		</div>
		<!-- Menu des liens  -->
		<div class="links">
			<a href="/">Accueil</a>
			<a href="/pages/cv.php">CV</a>
			<div>
				<a onclick="dropDownAnimate($(this));">Projets <span class="dropdown">▿</span></a>
					<!-- Sous-menu -->
				<div class="submenu closed" style="display: none;">
					<a href="/pages/projets/stage.php">Stage</a>
					<a href="/pages/projets/ap.php">Atelier Pro</a>
					<a href="/pages/projets/tp.php">TP</a>
				</div>
			</div>
			<div>
				<!-- Sous-menu -->
				<a onclick="dropDownAnimate($(this));">Veilles <span class="dropdown">▿</span></a>
				<div class="submenu closed" style="display: none;">
					<a href="/pages/veille/vt.php">Veille technologique</a>
					<a href="/pages/veille/vj.php">Veille juridique</a>
				</div>
			</div>
			<a href="/pages/contact.php">Contact</a>
		</div>
	</div>
