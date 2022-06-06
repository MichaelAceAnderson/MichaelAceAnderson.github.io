<?php
function lemoisEnclaire($numMois){
	$monMois="";
switch ($numMois) {
    case 1:
        $monMois="Janvier";
        break;
    case 2:
        $monMois="Février";
        break;
    case 3:
        $monMois="Mars";
        break;
		case 4:
        $monMois="Avril";
        break;
		case 5:
        $monMois="Mai";
        break;
		case 6:
        $monMois="Juin";
        break;
		case 7:
        $monMois="Juillet";
        break;
		case 8:
        $monMois="Août";
        break;
		case 9:
        $monMois="Septembre";
        break;
		case 10:
        $monMois="Octobre";
        break;
		case 11:
        $monMois="Novembre";
        break;
		case 12:
        $monMois="DECEMBRE";
        break;
		
}	
return $monMois;
	
}




?>