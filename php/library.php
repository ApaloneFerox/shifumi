<?php
require_once ('echoPre.php');
    /*
    shi : pierre
    fu: feuille
    mi: ciseaux
    */

    /*
     Fonction theWinnerIs
    */

function theWinnerIs($gamer_1, $gamer_2){

    /*
        $result = 
            > win
            > loose
            > execo
            > error
    */

    $result = "";
    switch ($gamer_1) {
        case 'shi':
            $result = shi($gamer_2);
            break;
        
        case 'fu':
            $result = fu($gamer_2);
            break;
        case 'mi':
            $result = me($gamer_2);
            break;
        
        default:
            #  ERROR MESSAGE
            $result = "error";
            break;
    }

    switch ($result) {
        case 'win':
            # WIN
            break;
        case 'loose':
            # LOOSE
            break;
        case 'execo':
            # EXECO
            break;
        
        default:
            #  ERROR MESSAGE
            break;
    }

    return $result;
}
function shi($opponentChoice){
    $result = "";
    switch ($opponentChoice) {
        case 'shi':
            # EXECO
            $result = "execo";
            break;
        case 'fu':
            # LOOSE
            $result = "loose";
            break;
        case 'mi':
            # WIN
            $result = "win";
            break;
        default:
            #  ERROR MESSAGE
            $result = "error";
            break;
    }
    return $result;
}
function fu($opponentChoice){
    switch ($opponentChoice) {
        case 'shi':
            # WIN
            $result = "win";
            break;
        case 'fu':
            # EXECO
            $result = "execo";
            break;
        case 'mi':
            # LOOSE
            $result = "loose";
            break;
        default:
            #  ERROR MESSAGE
            $result = "win";
            break;
    }
    return $result;
}
function me($opponentChoice){
    switch ($opponentChoice) {
        case 'shi':
            # LOOSE
            $result = "loose";
            break;
        case 'fu':
            # WIN
            $result = "win";
            break;
        case 'mi':
            # EXECO
            $result = "execo";
            break;
        default:
            #  ERROR MESSAGE
            $result = "win";
            break;
    }
    return $result;
}

$g1 = "fu";
$g2 = "shi";
echoPre("gamer_1 : ".$g1);
echoPre("gamer_2 : ".$g2);
echoPre("gamer_1 ".theWinnerIs($g1,$g2));
?>