<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <!-- On précise la description du site pour les moteurs de recherche -->
    <meta name="description" content="Ce Portfolio est une interface de découverte de mes projets, de mes compétences et de mon parcours">
    <!-- On paramètre la largeur de l'appareil -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Selon si le thème est sombre ou clair, on modifie la couleur du thème du navigateur (Chrome mobile) -->
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#333" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white" />

    <!-- On charge les scripts de dynamisme de la page -->
	<script src="/js/sideMenu.js"></script>
    <script src="/js/slideShow.js"></script>
    <script src="/js/styleDebug.js"></script>

    <!-- Polices & styles -->
    <link rel="preload" type="font/ttf" href="/fonts/agencyfb.ttf" as="font" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/style/styleGeneral.css" media="screen" onload="sheetLoaded('general')" onerror="sheetError('general')">
    <link rel="stylesheet" type="text/css" href="/style/styleLight.css" media="screen and (prefers-color-scheme: light)" onload="sheetLoaded('light')" onerror="sheetError('light')">
    <link rel="stylesheet" type="text/css" href="/style/styleDark.css" media="screen and (prefers-color-scheme: dark)" onload="sheetLoaded('dark')" onerror="sheetError('dark')">
    <!-- <link href="/style/styleMobile.css" rel="stylesheet" media="screen and (max-width: 600px)" onload="sheetLoaded('mobile')" onerror="sheetError('mobile')"> -->
    <link rel="stylesheet" type="text/css" href="/style/styleMobile.css" onload="sheetLoaded('mobile')" onerror="sheetError('mobile')">
    <link rel="stylesheet" type="text/css" href="/style/stylePrint.css" media="print" onload="sheetLoaded('print')" onerror="sheetError('print')">

</head>

<?php
include_once STRUCTURE_DIR . '/tracker.php';
?>