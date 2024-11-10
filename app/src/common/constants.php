<?php
define("VERSION", "1.0.0");

define("SRC_DIR", $_SERVER['DOCUMENT_ROOT'] . '/../src');
define("FILES_DIR", $_SERVER['DOCUMENT_ROOT'] . '/../files');
define("COMMON_DIR", SRC_DIR . '/common');
define("PAGES_DIR", SRC_DIR . '/pages');
define("STRUCTURE_DIR", SRC_DIR . '/structure');

define("PORTFOLIO_OWNER", "Michael \"Ace\" Anderson");
define("PORTFOLIO_OWNER_STATUS", "Ingénieur de développement");
define("PORTFOLIO_OWNER_BIRTHDAY", "13-07-2001");
define("PORTFOLIO_PROFILE_PICTURE_URL", "https://avatars.githubusercontent.com/u/33232231");

define("DEBUG", getenv('PHP_ENV') != "prod" ?? false);
define("STDOUT", fopen('php://stdout', 'w'));
?>