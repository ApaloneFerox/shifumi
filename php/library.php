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
    $theWinnerIs="";
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
            $theWinnerIs = "gamer";
            break;
        case 'loose':
            # LOOSE
            $theWinnerIs = "bot";
            break;
        case 'execo':
            # EXECO
            $theWinnerIs = "execo";
            break;
        
        default:
            #  ERROR MESSAGE
            $theWinnerIs = "error";
            break;
    }

    return $theWinnerIs;
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

/*
$g1 = "shi";
$g2 = "fu";
echoPre("gamer_1 : ".$g1);
echoPre("gamer_2 : ".$g2);
echoPre("The winner is ".theWinnerIs($g1,$g2));
*/
?>