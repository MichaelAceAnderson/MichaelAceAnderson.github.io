<?php

include_once STRUCTURE_DIR . '/head.php';
include_once STRUCTURE_DIR . '/header.php';

$articles = [
    [
        "img" => "https://www.developpez.net/forums/attachments/p635813d1/a/a/a",
        "link" => "https://windows.developpez.com/actu/342490/Microsoft-pourrait-bientot-permettre-de-deplacer-la-barre-des-taches-de-Window-11-dans-Windows-11-Dev-build-25309-il-est-possible-de-deplacer-la-barre-des-taches-du-bas-vers-le-haut-de-l-ecran/",
        "title" => "Microsoft pourrait bientôt permettre de déplacer la barre des tâches de Windows 11",
        "date" => "15/03/2023",
        "description" => "Avec Windows 11, Microsoft a fait de nombreux choix discutables en matière de design, d'interface utilisateur et d'ergonomie, mais l'un des plus déconcertants a été la décision de rendre la barre des tâches inamovible."
    ],
    [
        "img" => "https://img.phonandroid.com/2023/01/Explorateur-de-fichiers-modernise-Windows-11.jpg",
        "link" => "https://www.phonandroid.com/windows-11-decouvrez-le-tout-nouveau-look-de-lexplorateur-de-fichiers.html",
        "title" => "Windows 11 : découvrez le tout nouveau look de l’explorateur de fichiers",
        "date" => "23/01/2023",
        "description" => "Microsoft travaille sur une importante mise à jour de l'explorateur de fichiers dans Windows 11, qui apportera un design modernisé et des fonctionnalités supplémentaires."
    ],
    [
        "img" => "https://www.ginjfo.com/wp-content/webp-express/webp-images/uploads/2023/01/Windows-11-popups-2-ModernI.jpg.webp",
        "link" => "https://www.ginjfo.com/actualites/logiciels/windows-11/windows-11-il-est-temps-dabandonner-le-design-de-lere-windows-7-et-8-20230102",
        "title" => "Windows 11, il est temps d’abandonner le design de l’ère Windows 7 et 8",
        "date" => "02/01/2023",
        "description" => "Nous savons que Microsoft a prévu plusieurs mises à jour “Moment” pour Windows 11 en 2023. Elles vont apporter des nouveautés et poursuivre la transformation physique du système d’exploitation."
    ],
    [
        "img" => "https://img.phonandroid.com/2022/11/windows-11-bouton-recherche.jpg",
        "link" => "https://www.phonandroid.com/windows-11-revoit-le-design-de-barre-des-taches-et-inclut-des-widgets-animes-dans-une-nouvelle-mise-a-jour.html",
        "title" => "Windows 11 : le bouton recherche de la barre des tâches adopte un nouveau look imposant",
        "date" => "14/11/2022",
        "description" => "Microsoft vient de publier une nouvelle mise à jour Windows 11 destinée aux Insiders. Celle-ci apporte tout un tas de nouveautés, comme une barre des tâches revue et corrigée, des widgets animés ou encore un nouveau design pour certaines fenêtres. Une grosse amélioration que le grand public pourra sans doute essayer dès octobre."
    ],
    [
        "img" => "https://img.phonandroid.com/2022/10/Capture-decran-2022-10-28-145121.jpg",
        "link" => "https://www.phonandroid.com/windows-11-revoit-le-design-de-barre-des-taches-et-inclut-des-widgets-animes-dans-une-nouvelle-mise-a-jour.html",
        "title" => "Windows 11 : Microsoft introduit un nouveau design pour la fenêtre de réinitialisation",
        "date" => "28/10/2022",
        "description" => "La nouvelle Build de Windows 11 pour les Insiders est disponible. Elle apporte des changements discrets, dont un qui concerne la fenêtre de réinitialisation. Désormais, elle est plus en phase avec le reste de l’OS au niveau du design."
    ],
    [
        "img" => "https://images.frandroid.com/wp-content/uploads/2022/05/hp-spectre-x360-16-tablet-windows-11-1200x1020.jpg",
        "link" => "https://www.frandroid.com/os/windows/1455740_windows-11-un-ex-cadre-de-microsoft-choque-par-lexperience-du-menu-demarrer",
        "title" => "Windows 11 : un ex-cadre de Microsoft « choqué » par l’expérience du menu Démarrer",
        "date" => "02/09/2022",
        "description" => "« Choqué » par l'expérience utilisateur offerte par le menu Démarrer de Windows 11, un ex-cadre de Microsoft s'est exprimé sur Twitter. Sa prise de parole met en évidence les lacunes du nouveau menu.. et laisse entrevoir de belles pistes d'amélioration."
    ],
    [
        "img" => "https://img.phonandroid.com/2022/07/new-open-with.jpg",
        "link" => "https://www.phonandroid.com/windows-11-revoit-le-design-de-barre-des-taches-et-inclut-des-widgets-animes-dans-une-nouvelle-mise-a-jour.html",
        "title" => "Windows 11 revoit le design de barre des tâches et inclut des Widgets animés dans une nouvelle mise à jour",
        "date" => "29/07/2022",
        "description" => "Microsoft vient de publier une nouvelle mise à jour Windows 11 destinée aux Insiders. Celle-ci apporte tout un tas de nouveautés, comme une barre des tâches revue et corrigée, des widgets animés ou encore un nouveau design pour certaines fenêtres. Une grosse amélioration que le grand public pourra sans doute essayer dès octobre."
    ],
    [
        "img" => "https://www.ginjfo.com/wp-content/webp-express/webp-images/uploads/2022/02/Windows-11-copy-dialogs-fluent-design-02-768x409.jpg.webp",
        "link" => "https://www.ginjfo.com/actualites/logiciels/windows-11/windows-11-et-son-interface-moderne-il-y-a-encore-du-travail-20220202",
        "title" => "Windows 11 et son interface « moderne », il y a encore du travail",
        "date" => "02/02/2022",
        "description" => "Windows 11 introduit d’importants changements face à Windows 10. Les plus marquants concernent principalement l’interface et l’environnement du bureau."
    ],
    [
        "img" => "https://www.presse-citron.net/app/uploads/2021/06/Windows-11.jpg",
        "link" => "https://www.presse-citron.net/windows-11-un-ancien-directeur-de-microsoft-critique-le-menu-demarrer/",
        "title" => "Windows 11 : un ancien directeur de Microsoft critique le menu Démarrer",
        "date" => "01/02/2022",
        "description" => "Cet ex responsable Microsoft de l’expérience utilisateur se dit choqué par le manque d’ergonomie du nouveau menu Démarrer de Windows 11."
    ],
    [
        "img" => "https://img.phonandroid.com/2021/10/Windows-11-10.jpeg",
        "link" => "https://www.phonandroid.com/windows-11-la-nouvelle-mise-a-jour-ameliore-le-design-par-petites-touches.html",
        "title" => "Windows 11 : la nouvelle mise à jour améliore le design par petites touches",
        "date" => "28/01/2022",
        "description" => "Windows 11 accueille une nouvelle mise à jour pour les Insiders. Celle-ci apporte des améliorations de l’interface utilisateur, mais aussi des voix inédites pour le narrateur. Ces nouveautés pourraient être le premier aperçu de la grosse mise à jour d’automne 2022."
    ],
    [
        "img" => "https://img.phonandroid.com/2022/01/Gestionnaire-des-taches-Windows-11.jpg",
        "link" => "https://www.phonandroid.com/windows-11-le-gestionnaire-des-taches-a-droit-a-un-nouveau-design-plus-moderne.html",
        "title" => "Windows 11 : le Gestionnaire des tâches a droit à un nouveau design plus moderne",
        "date" => "21/01/2022",
        "description" => "Microsoft s'apprête à remanier le gestionnaire de tâches dans Windows 11. Comme le reste du système d'exploitation, le gestionnaire de tâches reçoit enfin un nouveau design dans la dernière mise à jour qui correspond au nouveau langage Fluent Design de Microsoft."
    ],
    [
        "img" => "https://www.laptopspirit.fr/wp-content/uploads/new/2021/12/Windows-11-Bloc-Notes-1-600x524.jpg",
        "link" => "https://www.laptopspirit.fr/300926/windows-11-nouveau-design-pour-le-bloc-notes-notepad",
        "title" => "Windows 11 – nouveau design pour le Bloc-Notes Notepad",
        "date" => "08/12/2021",
        "description" => "Microsoft a décidé de donner un coup de jeune à l'application Bloc-Notes de Windows 11. Le logiciel de prise de notes va bénéficier d'un nouveau design plus moderne et plus épuré."
    ],
    [
        "img" => "https://img.phonandroid.com/2021/06/Windows-11-Nouveau-Explorateur-de-fichiers.jpg",
        "link" => "https://www.phonandroid.com/windows-11-microsoft-devoile-nouveau-design-explorateur-fichiers-powerpoint-word.html",
        "title" => "Windows 11 : Microsoft dévoile le design de l’explorateur de fichiers, PowerPoint et Word",
        "date" => "28/06/2021",
        "description" => "Windows 11 continue de se dévoiler. Dans la foulée de la présentation des nouvelles fonctionnalités du système d'exploitation, Microsoft a dévoilé le design des applications natives, dont l’explorateur de fichiers, PowerPoint, Paint et Word. Comme le reste de l'OS, Microsoft s'est évertué à simplifier l'interface des applications."
    ],
    [
        "img" => "https://images.frandroid.com/wp-content/uploads/2021/06/windows-11-nouveau-design-apps-1-1200x675.jpg",
        "link" => "https://www.frandroid.com/marques/microsoft/983779_windows-11-un-nouveau-design-pour-lexplorateur-de-fichiers-powerpoint-word-et-paint",
        "title" => "Windows 11 : un nouveau design pour l’explorateur de fichiers, PowerPoint, Word et Paint",
        "date" => "25/06/2021",
        "description" => "La conférence de Windows 11 est terminée, mais Microsoft continue de distiller quelques informations supplémentaires sur le système."
    ]
];
?>

<section class="main" id="main">
    <div class="title">
        <h1>Veille informationnelle</h1>
        <hr>
    </div>
    <p>
        On parle de veille informationnelle pour désigner le fait de se tenir informé des dernières nouvelles dans un
        domaine choisi,
        afin d'être plus en phase avec l'actualité, avoir un panel de connaissances plus élargi et trouver plus
        efficacement des solutions dans le milieu professionnel. Cette veille porte sur l'évolution du design de Windows
        11.
    </p>
    <p>
        En tant que designer, il est important de rester à l'affût des dernières tendances, non pas par simple phénomène
        de mode, mais pour
        concevoir des interfaces avec lesquelles les utilisateurs seront déjà familiers, constituant alors un gain de
        temps considérable à la fois
        pour l'utilisateur qui s'orientera plus rapidement et pour le designer qui pourra suivre des normes déjà
        existantes plutôt que de créer les siennes.
    </p>
    <div class="content">
        <?php
        foreach ($articles as $article) {
            echo '<article>';
            echo '<img src="' . $article['img'] . '" alt="' . $article['title'] . '" title="' . $article['title'] . '">';
            echo '<h6>' . $article['date'] . '</h6>';
            echo '<hr>';
            echo '<h1>';
            echo '<a target="_blank" href="' . $article['link'] . '">' . $article['title'] . '</a>';
            echo '</h1>';
            echo '<p>' . $article['description'] . '</p>';
            echo '</article>';
        }
        ?>
    </div>
</section>

<?php
include_once STRUCTURE_DIR . '/slideShow.php';

include_once STRUCTURE_DIR . '/footer.php';
?>