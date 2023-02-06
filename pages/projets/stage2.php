<?php
//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/head.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php';
?>
<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->
<section class="main" id="main">
    <div class="title">
        <h1>Stage</h1>
        <hr>
    </div>
    <p>Mon rapport de stage à Norsys (Févier-Mars 2023)</p>
    <div class="content">
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-01.jpg" alt="Sommaire" title="Sommaire">
            <h1>Sommaire</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-02.jpg" alt="Introduction à ChatGPT" title="Introduction à ChatGPT">
            <h1>Introduction à ChatGPT</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-03.jpg" alt="La particularité de ChatGPT" title="La particularité de ChatGPT">
            <h1>La particularité de ChatGPT</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-04.jpg" alt="Les possibilités d'applications de ChatGPT" title="Les possibilités d'applications de ChatGPT">
            <h1>Les possibilités d'applications de ChatGPT</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-05.jpg" alt="Les applications en permaentreprise et transition écologique" title="Les applications en permaentreprise et transition écologique">
            <h1>Les applications en permaentreprise et transition écologique</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-06.jpg" alt="Applications en e-commerce" title="Applications en e-commerce">
            <h1>Applications en e-commerce</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-07.jpg" alt="Applications en ressources humaines" title="Applications en ressources humaines">
            <h1>Applications en ressources humaines</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-08.jpg" alt="Applications en ressources humaines" title="Applications en ressources humaines">
            <h1>Applications en ressources humaines 2</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-09.jpg" alt="Applications en formation" title="Applications en formation">
            <h1>Applications en formation</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-10.jpg" alt="Applications en programmation" title="Applications en programmation">
            <h1>Applications en programmation</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-11.jpg" alt="Caractéristiques de Mintlify" title="Caractéristiques de Mintlify">
            <h1>Caractéristiques de Mintlify</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-12.jpg" alt="Caractéristiques de IntelliCode" title="Caractéristiques de IntelliCode">
            <h1>Caractéristiques de IntelliCode</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-13.jpg" alt="Caractéristiques de TabNine" title="Caractéristiques de TabNine">
            <h1>Caractéristiques de TabNine</h1>
        </article>
        <!-- Retrait de la slide sur Codeium: GIFs non exportables en jpg/pdf  -->
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-15.jpg" alt="Caractéristiques de CodeGPT" title="Caractéristiques de CodeGPT">
            <h1>Caractéristiques de CodeGPT</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-16.jpg" alt="Caractéristiques de ChatGPT (VSCode)" title="Caractéristiques de ChatGPT (VSCode)">
            <h1>Caractéristiques de ChatGPT (VSCode)</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-17.jpg" alt="Caractéristiques de GitHub Copilot" title="Caractéristiques de GitHub Copilot">
            <h1>Caractéristiques de GitHub Copilot</h1>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-18.jpg" alt="Conclusion" title="Conclusion">
            <h1>Conclusion</h1>
        </article>


        <div class="title">
            <h1>Compte-rendu Word</h1>
            <hr>
        </div>
        <iframe src="/common/files/RSW2.pdf" title="RS Word">Rapport de stage Word</iframe>
        <div class="title">
            <h1>Compte-rendu PowerPoint en PDF</h1>
            <hr>
        </div>
        <iframe src="/common/files/RSP2.pdf" title="RS PowerPoint">Rapport de stage PowerPoint</iframe>
    </div>
</section>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/slideShow.php';
?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/footer.php';
?>