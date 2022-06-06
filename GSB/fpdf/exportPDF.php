<?php
require ('../model/ligneFraisAuForfait.php');
require ('../model/fraisForfait.php');
require ('../outils/lesOutils.php');
require('fpdf.php');

// démarrage ou reprise de la session
initSession();

// page inaccessible si utilisateur non connecté



class PDF extends FPDF {

    // En-tête
    function Header() {
        // Logo
        $this->Image('../boostrap/images/logo_gsb.jpg', 90, 6, 30);
    }

    // Pied de page
    function Footer() {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        $this->SetFont('Times', 'I', 8);
        // Numérotation des pages
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function enteteFicheFrais($bdd, $idMois, $idVisiteur) {
        $this->SetTextColor(31, 73, 125);
        $this->SetFont('Times', 'B', 15);
        // Saut de ligne + Décalage à droite + Texte + Saut de ligne
        $this->Ln(30);
        $this->Cell(10);
        $this->Cell(170, 10, utf8_decode('REMBOURSEMENT DE FRAIS ENGAGÉS'), 0, 0, 'C');
        $idJeuFicheDeFrais = $bdd->query('select nom, prenom from utilisateur join fichefrais on id = idVisiteur where id="' . $idVisiteur . '" and mois="' . $idMois . '";');
        $lgFicheFrais = $idJeuFicheDeFrais->fetch();
        $idJeuFicheDeFrais->closeCursor();
        $this->Ln(15);
        $this->Cell(10);
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Times', '', 12);
        $this->Cell(50, 7, "Visiteur", 0);
        $this->Cell(40, 7, $idVisiteur, 0);
        $this->Cell(80, 7, utf8_decode($lgFicheFrais['prenom']) . " " . strtoupper(utf8_decode($lgFicheFrais['nom'])), 0);
        $this->Ln(10);
        $this->Cell(10);
        $this->Cell(50, 7, "Mois", 0);
        $noMois = intval(substr($idMois, 4, 2));
        $annee = intval(substr($idMois, 0, 4));
        
    }

    }

    
   
$noMois = intval(substr($mois, 4, 2));
$annee = intval(substr($mois, 0, 4));
header('Content-Type: application/x-download');
header('Content-Disposition: inline; filename="Fiche_de_frais_' . utf8_decode($lgFicheFrais['prenom']) . '_' . strtoupper(utf8_decode($lgFicheFrais['nom'])) . '_' . utf8_decode(obtenirLibelleMois($noMois)) . '_' . $annee . '.pdf');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
readfile($fichier);
?>