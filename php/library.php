<?php
require_once ('echoPre.php');


$botChoice_array = [
    "shi",
    "fu",
    "mi",
];


//Déclaration de la fonction qui affichera l'utilisateur
function showIMGChoice($showGamerChoice){
    // $gamerChoice = $_POST["showGamerChoice"];

    if ($showGamerChoice === "shi") {
        echo '<img src="img/stone.svg" alt="shi">';
    }
           
    elseif ($showGamerChoice === "fu") {
        echo  '<img src="img/leaf.svg" alt="fu">';
    }
    
    elseif ($showGamerChoice === "mi") {
        echo '<img src="img/scissors.svg" alt="mi">'  ;
    }
    else{
      echo '<img src="" alt="error">';
    }
}

// gamerChoice("shi")



//Déclaration de la fonction qui affichera les choix random du Bot
function showBotChoice($arrayChoice){
    // $showBotChoice= $_POST["showBotChoice"];
    //Ressort shi fu mi
    $random = array_rand($arrayChoice);
    return $arrayChoice[$random];
}

// var_dump(showBotChoice($showBotChoice));




    /*
    shi : pierre
    fu: feuille
    mi: ciseaux
    */

    /*
     Fonction theWinnerIs
    */

function theWinnerIs($gamer, $bot){

    /*
        $result = 
            > win
            > loose
            > execo
            > error
    */
    $theWinnerIs="";
    $result = "";
    switch ($gamer) {
        case 'shi':
            $result = shi($bot);
            break;
        
        case 'fu':
            $result = fu($bot);
            break;
        case 'mi':
            $result = me($bot);
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
