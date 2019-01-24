<?php

$showBotChoice = [
    "shi",
    "fu",
    "mi",
];


//Déclaration de la fonction qui affichera l'utilisateur
function showIMGgamerChoice($showGamerChoice){
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
function showBotChoice($showBotChoice){
    // $showBotChoice= $_POST["showBotChoice"];
    $random = array_rand($showBotChoice);
    return $showBotChoice[$random];
}

// var_dump(showBotChoice($showBotChoice));
?>
