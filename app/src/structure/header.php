	<?php
    $age = date_diff(date_create(PORTFOLIO_OWNER_BIRTHDAY), date_create(date("Y-m-d")))->format('%y') . ' ans';
    ?>
	<header>
	    <a href="#">
	        <h1>Portfolio</h1>
	    </a>
	</header>
	<div class="menu">
	    <div class="menu-btn close">☰</div>
	    <div class="profile">
	        <img src="<?php echo PORTFOLIO_PROFILE_PICTURE_URL ?>" alt="Photo de profil" />
	        <div class="infos">
	            <h1><?php echo PORTFOLIO_OWNER; ?></h1>
	            <h2><?php echo $age; ?></h2>
	            <h2><?php echo PORTFOLIO_OWNER_STATUS; ?></h2>
	        </div>
	    </div>
	    <div class="links">
	        <a href="/">Accueil</a>
	        <div>
	            <a onclick="subMenu(this);">Stages <span class="dropdown">▿</span></a>
	            <div class="submenu closed">
	                <a href="/stages/stage1">Stage 1</a>
	                <a href="/stages/stage2">Stage 2</a>
	            </div>
	        </div>
	        <a href="/veille">Veille informationnelle</a>
	        <a href="/contact">Contact</a>
	    </div>
	</div>