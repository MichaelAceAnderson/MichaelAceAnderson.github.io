<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- On définit le titre de la page -->
    <title>Portfolio</title>
    <!-- On précise comment est encodée la page -->
    <meta charset="UTF-8">
    <!-- On paramètre la largeur de l'appareil -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- On précise la description du site pour les moteurs de recherche -->
    <meta name="description"
        content="Ce Portfolio est une interface de découverte de mes projets, de mes compétences et de mon parcours">
    <!-- Selon si le thème est sombre ou clair, on modifie la couleur du thème du navigateur (Chrome mobile) -->
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#333" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white" />
    <!-- On relie la feuille de style avec la page -->
    <script src="/common/js/styleDebug.js"></script>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="preload" type="font/ttf" href="/common/fonts/agencyfb.ttf" as="font" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/common/style/styleGeneral.css" media="screen"
        onload="sheetLoaded('general')" onerror="sheetError('general')">
    <link rel="stylesheet" type="text/css" href="/common/style/styleLight.css"
        media="screen and (prefers-color-scheme: light)" onload="sheetLoaded('light')" onerror="sheetError('light')">
    <link rel="stylesheet" type="text/css" href="/common/style/styleDark.css"
        media="screen and (prefers-color-scheme: dark)" onload="sheetLoaded('dark')" onerror="sheetError('dark')">
    <!-- <link href="/common/style/styleMobile.css" rel="stylesheet" media="screen and (max-width: 600px)" onload="sheetLoaded('mobile')" onerror="sheetError('mobile')"> -->
    <link rel="stylesheet" type="text/css" href="/common/style/styleMobile.css" onload="sheetLoaded('mobile')"
        onerror="sheetError('mobile')">
    <link rel="stylesheet" type="text/css" href="/common/style/stylePrint.css" media="print"
        onload="sheetLoaded('print')" onerror="sheetError('print')">

</head>