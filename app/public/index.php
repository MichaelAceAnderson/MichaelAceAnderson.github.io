<?php
include_once __DIR__ . '/../src/common/constants.php';

// Grâce à la redirection effectuée dans la configuration du serveur (ou .htaccess si Apache),
// une URL renverra une requête GET contenant le nom de la page à inclure & afficher
// Ex: localhost/test/page/bidule -> $_GET['page'] = '/test/page/bidule'
$page = isset($_GET['page']) ? $_GET['page'] : '/home';
$pagePath = PAGES_DIR . $page . '.php';

if (DEBUG)
fwrite(STDOUT, "Tentative d'ouverture de la page " . $page . " depuis " . $pagePath . " à l'URL " . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "\n");

if (file_exists($pagePath)) {
    include_once $pagePath;
} else {
    include PAGES_DIR . '/error.php';
    // Forcer le code 404
    $_GET['code'] = 404;
}
?>