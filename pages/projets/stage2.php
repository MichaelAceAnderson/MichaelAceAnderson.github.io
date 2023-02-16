<?php
//Les includes permettent d'intégrer du code provenant d'autres pages pour éviter de répeter un même code dans plusieurs pages, surtout si celui-ci doit changer régulièrement
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/head.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php';
?>
<!-- Après avoir inclus le code commun à toutes les pages, on rajoute le contenu individuel de celle-ci -->
<section class="main" id="main">
    <div class="title">
        <h1>Stage ⚠️ <b>(INCOMPLET - Stage pas terminé)</b></h1>
        <hr>
    </div>
    <p>Mon rapport de stage à Norsys (Février-Mars 2023)</p>
    <div class="content">
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-01.jpg" alt="Sommaire" title="Sommaire">
            <h1>Sommaire</h1>
            <p class="hidden">Administrateurs, directeurs, responsables, commerciaux, ingénieurs, et bien entendu,
                développeurs: Bonjour à tous.
                Depuis déjà les années 80 avec War Games, Tron, Electric Dreams, on rêve de voir un jour un ordinateur
                capable de réfléchir, d’apprendre, voire même de nous enseigner des choses. Et aujourd’hui, bien qu’il
                ne s’agisse pas à proprement parler de réflexion, l’intelligence artificielle prend une place de plus en
                plus importante dans les innovations du quotidien. Et si les ChatBots existaient déjà auparavant, celui
                sur lequel on va se pencher aujourd’hui, ChatGPT, est une avancée majeure. Pourquoi ? Comment ? À quel
                prix ? Menace ou opportunité ? C’est ce qu’on va voir !
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-02.jpg" alt="Introduction à ChatGPT" title="Introduction à ChatGPT">
            <h1>Introduction à ChatGPT</h1>
            <p class="hidden">ChatGPT, c’est un ChatBot conçu sur un modèle de langage. C’est-à-dire que son
                fonctionnement est basé sur la prédiction du mot suivant. Quand on interroge ChatGPT, il va chercher les
                informations en lien avec notre question et tenter de générer la réponse la plus probable et pertinente
                à la question avec les mots qu’il a le plus retrouvé dans ses données d’entraînement.
                L’IA a été entrainée sur énormément de textes pour pouvoir à la fois collecter les informations qu’elle
                nous ressortira dans ses réponses, mais aussi à structurer ces réponses avec une syntaxe méthodique et
                synthétique. Bien qu’il existe des alternatives qui fonctionnent aussi sur des modèles de langage,
                ChatGPT a ses particularités.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-03.jpg" alt="La particularité de ChatGPT" title="La particularité de ChatGPT">
            <h1>La particularité de ChatGPT</h1>
            <p class="hidden">ChatGPT est capable de revenir sur ses réponses précédentes, approfondir, se corriger, se
                remettre en question, faire confiance à l’utilisateur, parfois à tort/à raison.
                Il peut invalider certaines questions tout en essayant d’imaginer une réponse.
                Par ailleurs, tous les détails qu’il juge utile et qui ne sont pas fournis par l’utilisateur, c’est l’IA
                qui les imagine, notamment pour créer des histoires, CV, etc…
                Il peut être utile pour le code, mais ça reste un modèle fondé sur la probabilité et la pertinence.
                Toute production d’une IA nécessite le recul et la révision de l’utilisateur.
                Les réponses peuvent être biaisées puisqu’elles trouvent leur origine dans les données qui ont entraîné
                l’IA et qui ont été sélectionnées par les entraîneurs.
                D’ailleurs, les conditions d’entraînement de l’IA posent un problème d’éthique puisque les Kenyans ont
                gardé des séquelles des textes violents qu’ils ont dû lire pour les écarter des données d’analyses.
                L’utilisation de ChatGPT ne doit pas récompenser ce comportement mais peut le contrebalancer avec une
                utilisation juste qui ne se limite pas au profit.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-04.jpg" alt="Les applications en entreprise" title="Les applications en entreprise">
            <h1>Les applications en entreprise</h1>
            <p class="hidden">La force de ChatGPT, c’est d’une part l’imagination, et d’autre part la quantité variée de
                données qui fondent ses réponses, permettant des applications dans beaucoup de domaines, que ce soit
                pour le commerce, les ressources humaines, la formation, la transition écologique dans le cadre de la
                permaentreprise, et bien évidemment la programmation.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-05.jpg" alt="Applications en permaentreprise & transition écologique" title="Applications en permaentreprise & transition écologique">
            <h1>Applications en permaentreprise & transition écologique</h1>
            <p class="hidden">En ce qui concerne la transition écologique, j’ai demandé à titre d’exemple à ChatGPT de
                comparer le Edge Computing et le Cloud Computing. La principale différence entre les deux, c’est la
                proximité physique des serveurs sur lesquels on travaille. Le Edge Computing, c’est traiter les données
                sur des machines plus proches, pour limiter les besoins en bande passante, transport de données et
                vitesse de traitement. Et donc, d’après ChatGPT, ça peut être une bonne alternative écologique, mais
                seulement sous certaines conditions comme la taille des centres de données utilisées, l’utilisation des
                donées et évidemment le coût énergétique de ceux-ci.
                Ici, ChatGPT m’a fourni une réponse rapide, synthétique, sans moteur de recherche, mais assez nuancée et
                qui ne répond pas directement à mon problème. Je peux la compléter avec + d’informations grâce à
                l’option « Regénérer la réponse » qui se trouve en bas de la page.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-06.jpg" alt="Applications en e-commerce" title="Applications en e-commerce">
            <h1>Applications en e-commerce</h1>
            <p class="hidden">Maintenant, en ce qui concerne le e-commerce, j’ai pris le premier sujet qui me passait
                par la tête: Marketing->Mise en avant->Référencement->SEO ! (Search Engine Optimization).
                Je lui ai demandé d’imaginer une liste de mots-clés pour promouvoir une entreprise de services
                informatiques, et il m’a donné les plus courants. Cependant, non seulement je peux regénérer la réponse
                pour en avoir d’autres mais l’API de ChatGPT permet également de configurer le degré de créativité des
                réponses du ChatBot, et il pourrait donc me faire des réponses beaucoup moins évidentes et
                potentiellement plus intéressantes.
                Ensuite, je me suis intéressé à l’accompagnement des clients et je lui ai demandé de me donner une
                méthode pour expliquer à des clients une solution programmable. Et comme la méthode, la synthétisation
                et la communication, c’est le fort de ChatGPT, je n’ai pas été déçu, j’ai reçu une méthode efficace en 5
                points sur lesquels je peux m’appuyer à chaque fois que j’échange avec un client.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-07.jpg" alt="Applications en ressources humaines" title="Applications en ressources humaines">
            <h1>Applications en ressources humaines</h1>
            <p class="hidden">En ressources humaines, j’ai tenté de trouver des applications au ChatBot des deux côtés
                du bureau ! En ce qui concerne les employés, ChatGPT peut vous suggérer un template de CV, de lettre de
                motivation, de demande d’augmentation, ou de quasiment n’importe quelle communication écrite.
                Du côté direction, ChatGPT peut vous servir à générer des templates de contrats ou de notes de service.
                Dans les deux cas, je ne recommande pas de vous arrêter à la réponse que vous obtiendrez. Elle est
                souvent générique, faite pour donner une idée générale, une structure, un squelette, qui contiendra
                toutes les informations et précisions que vous avez fourni et d’autres éléments qui sont imaginés
                lorsqu’ils sont manquants. Mais il faut toujours vérifier et compléter par soi-même.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-08.jpg" alt="Applications en recrutement" title="Applications en recrutement">
            <h1>Applications en ressources humaines</h1>
            <p class="hidden">Puisqu’on sait qu’un point fort de cette IA, c’est d’imaginer et de faire des listes, on
                peut lui demander des exemples de questions pour un entretien d’embauche. Ici, je lui ai demandé de me
                préparer des questions pour un ingénieur analyste métier. Cette liste peut être utile non seulement pour
                le recruteur mais aussi pour le candidat, qui peut se préparer à l’avance.
                En ce qui concerne le recrutement, ChatGPT ne peut pas vraiment m’indiquer une personne en particulier
                puisqu’il a été programmé pour ne pas divulguer d’informations personnelles, et que ses données
                d’entraînement sont antérieures à 2021. Par contre, il peut m’aiguiller et me dire où trouver cette
                personne ! Il m’a donc proposé une liste d’exemples de plateformes ou de moyens de recrutement.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-09.jpg" alt="Applications en formation" title="Applications en formation">
            <h1>Applications en formation</h1>
            <p class="hidden">Et alors maintenant ? C’est génial, grâce à ChatGPT, vous avez un CV, une lettre de
                motivation, vous avez préparé votre entretien d’embauche à l’avance, vous avez triché partout et
                maintenant vous voilà embauché développeur. Mais comment allez-vous faire ? Pas de panique. Car ChatGPT
                permet AUSSI de se former !
                Vous pouvez lui poser des questions théoriques, comme par exemple d’expliquer la programmation orientée
                objet, mais vous pouvez aussi lui poser des questions plus techniques, et lui demander de trouver la
                fonction la plus adaptée pour couper une chaîne de caractères par exemple.
                Vous pouvez également lui demander de générer une solution, une fonction complète, dans la plupart des
                langages, toujours avant 2021 bien évidemment, et en restant simple. Ici je lui ai demandé de me faire
                une procédure stockées en SQL qui me renvoie la somme des 100 premiers nombres. Donc ça marche, c’est
                super, mais elle est nulle en maths. Donc elle m’a donné un code qui fonctionne mais pas le code le plus
                optimisé, et pas forcément le plus adapté à mon projet. Au maximum, ChatGPT peut s’appuyer sur une page
                de code que vous lui fournissez mais pas sur un projet entier.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-10.jpg" alt="Applications en programmation" title="Applications en programmation">
            <h1>Applications en programmation</h1>
            <p class="hidden">ChatGPT est utilisable non seulement via le tchat web fourni par OpenAI sur leur site,
                mais aussi via des extensions Visual Studio Code ! Il en existe une variété, qui n’utilisent pas
                forcément l’API de ChatGPT et qu’on va voir en détail.
                Là où le tchat permet de se former, trouver des fonctions génériques ou natives etc…, les extensions
                vont pouvoir nous aider plus en profondeur et nous proposer par exemple de l’autocomplétion
                intelligente, en analysant notre code, de générer des tests unitaires à la demande, de refactoriser,
                parfois optimiser du code, ou tout bêtement de générer des commentaires et de la documentation.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-11.jpg" alt="IntelliCode" title="IntelliCode">
            <h1>IntelliCode</h1>
            <p class="hidden">Les extensions, j’en ai essayé plusieurs, j’ai essayé de faire un classement et je vais
                vous les présenter une par une, de la plus basique à la plus utile à mes yeux.
                En premier, IntelliCode, l’une des plus basiques du store, par Microsoft, va ,d’une part, tenter de
                compléter votre code avec les propositions qui lui paraissent les plus pertinentes, qu’elle a le plus
                retrouvé dans ses données d’entraînement, mais aussi de vous mettre en haut du menu des fonctions celle
                qui lui paraît la plus adaptée. Les principaux inconvénients que j’ai remarqué, mais qui sont peut-être
                liés aux codes sur lesquels je l’ai essayée, c’est que bien souvent j’ai eu des propositions hors-sujet
                et, là où le menu de propositions est plutôt pertinent, les propositions d’autocomplétions restent assez
                rares.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-12.jpg" alt="Tabnine" title="Tabnine">
            <h1>Tabnine</h1>
            <p class="hidden">Deuxième extension, Tabnine, qui est aussi capable de fournir des propositions
                d’auto-complétion, sauf qu’en plus de se baser sur les données qui l’ont entraîné, elle essaye aussi de
                comprendre votre code et de rendre ses propositions plus adaptées à ce que vous faîtes. Vous pouvez même
                lui donner des instructions personnalisées avec des commentaires et elle essaiera de vous générer une
                fonction, de la même façon que quand vous le demandez via le chat à ChatGPT, sauf qu’en plus, là, ça
                sera plus adapté à votre page de code en cours d’ouverture. Par ailleurs, vous pouvez choisir si vous
                voulez que l’extension se base plus sur un modèle local, cloud, ou hybride. Il existe une version
                payante, mais le fait d’utiliser la version gratuite n’implique pas la collection de votre code, une
                super nouvelle pour la propriété intellectuelle et la confidentialité des données.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-13.jpg" alt="Codeium" title="Codeium">
            <h1>Codeium</h1>
            <p class="hidden">Troisième extension, c’est Codeium, que j’ai trouvé plutôt efficace, surtout sur les
                tâches simples, guidées par du code que vous avez déjà écrit. Ça peut vous faire économiser beaucoup de
                temps sur les tâches répétitives. Elle est aussi capable de faire de l’auto-complétion et de comprendre
                des instructions à l’aide de vos commentaires, et je n’en suis pas encore sûr mais j’ai eu l’impression
                qu’elle faisait des propositions basées sur toutes les pages que vous avez ouvert, et pas seulement sur
                la page où vous êtes en train d’écrire. Tout comme ChatGPT, elle est capable de reprendre ce qu’il y a
                au-dessus et d’apporter des modifications, et elle est capable de générer des tests unitaires.
                Principaux défauts, il faut un compte, pour que Codeium puisse faire des statistiques, mais ça reste
                gratuit, et aussi, j’ai trouvé que les propositions ont tendance à plus se baser sur le code au-dessus
                et moins sur le code en-dessous.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-14.jpg" alt="ChatGPT" title="ChatGPT">
            <h1>ChatGPT</h1>
            <p class="hidden">Ensuite, la fameuse, l’extension ChatGPT, qui fonctionne grâce à son API, et qui nécéssite
                donc un compte OpenAI, et qui est plutôt bien intégrée à VS Code puisque le tchat est sur la gauche et
                que les fonctions utiles apparaissent dans le menu contextuel. L’extension restera gratuite tant que
                ChatGPT le sera, et vous permettra d’expliquer, documenter, commenter, chercher des bugs, refactoriser,
                optimiser votre code, générer des tests unitaires et tout ce que vous pouvez lui demander à partir d’une
                sélection de code et du menu contextuel, ou à partir du chat.
                Il faudra noter quand même qu’elle ne lit pas votre page de code mais seulement ce que vous lui donnez.
                Par ailleurs, quand elle aura un code à vous proposer, elle vous le donnera via le tchat mais elle ne le
                mettra pas sur votre page, donc c’est légèrement moins rapide. Il faut aussi garder en tête que ChatGPT
                peut faire des erreurs de logique ou de lecture dans votre code et que tout ce que vous lui donnez sera
                collecté par OpenAI. Et que même si ses données d’entraînement sont des données publiques, ça ne veut
                pas dire qu’elles ne sont pas protégées par des droits d’auteur, ce qui pourrait alors vous faire
                prendre le risque de faire du plagiat en acceptant une proposition de ChatGPT, raison pour laquelle il
                faut éviter de lui demander des fonctions très complexes et rester sur des choses génériques.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-15.jpg" alt="GitHub Copilot" title="GitHub Copilot">
            <h1>GitHub Copilot</h1>
            <p class="hidden">Enfin, l’extension qui est selon moi la meilleure pour VS Code, c’est GitHub Copilot, qui
                utilise l’IA Codex, toujours par OpenAI, mais spécialisée en code et pas seulement sur du texte avec une
                dimension plus littéraire.
                Je l’ai trouvée beaucoup plus douée que les autres dans ce qu’elle faisait, que ce soit dans
                l’auto-complétion, les commentaires, la génération de fonctions originales, les tests unitaires etc…
                Mais dès que vous avez besoin de générer quelque chose, il faut le faire via un commentaire, et non pas
                avec un champ de saisie ou un menu contextuel, donc ça peut vite vous faire un code trop chargé en
                commentaires si vous ne les retirez pas régulièrement.
                L’efficacité de cette IA se justifie sans doute par le fait qu’elle soit payante, sauf pour les
                étudiants, et là je vais m’adresser du coup aux stagiaires et alternants qui peuvent bénéficier de
                GitHub Student comme ça a été mon cas pour réaliser mes tests. Il faut donc un compte GitHub avec un
                abonnement, qui démarre je crois à une dizaine d’euros par mois. Votre code ne sera en revanche pas
                collecté mais il subsiste encore le risque de plagiat lié aux dépôts sur lesquels l’IA a été entraînée.
            </p>
        </article>
        <article class="no-align">
            <img src="/common/img/RSP2/RSP2-16.jpg" alt="Conclusion" title="Conclusion">
            <h1>Conclusion</h1>
            <p class="hidden">Qu’est-ce qu’il faut conclure de l’IA ?
                L’IA n’est donc pas capable de « réfléchir », mais elle tentera d’imiter votre syntaxe, ou encore les
                données qui l’ont entraînée, pour trouver la solution la plus adaptée à votre besoin. Elle nécessite un
                certain recul, et de la révision de la part de son utilisateur. Rassurez-vous, l’IA ne vous remplacera
                pas, et ne fera jamais votre métier à votre place, c’est un outil, voire un assistant tout au plus, mais
                vous resterez toujours le pilote. Le principe même de l’IA est de se spécialiser dans la répétition de
                tâches, mais elle ne sera jamais capable d’imaginer toute seule quelque chose de nouveau qui soit à la
                fois optimisé, innovant, entraîné sur les derniers frameworks et librairies, et complètement pertinent
                au besoin du client.
                Le bon employé, ce n’est pas celui qui surpasse l’IA dans ce qu’elle fait le mieux, c’est celui qui sait
                bien s’en servir.
                Votre rôle, en tant qu’utilisateur de l’IA, c’est d’apprendre à être un bon pilote, et pour ça il faudra
                non seulement essayer d’imiter la syntaxe de l’IA quand vous posez des questions, pour qu’elle l’analyse
                de la façon la plus efficace, mais aussi de fournir un maximum d’éléments contextuels, de précisions et
                de syntaxe pour la familiariser et lui permettre de vous imiter pour ensuite gagner du temps sur les
                tâches répétitives. Ma recommandation personnelle, ça serait de combiner ChatGPT et GitHub Copilot, de
                telle manière à pouvoir coder plus rapidement avec CoPilot et de compléter avec ChatGPT pour tous vos
                besoins plus généraux qui ne nécessitent pas nécessairement une analyse code, surtout quand le code doit
                rester privé.
            </p>
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