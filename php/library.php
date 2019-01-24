<?php

$showBotChoice = [
    "shi",
    "fu",
    "mi",
];


//Déclaration de la fonction qui affichera l'utilisateur
function gamerChoice($showGamerChoice){
    // $gamerChoice = $_POST["showGamerChoice"];

    if ($showGamerChoice === "shi") {
        echo "<p>image shi </p>";
    }
           
    elseif ($showGamerChoice === "fu") {
        echo  "<p>image fu </p>" ;
    }
    elseif ($showGamerChoice === "mi") {
        echo "<p> image mi </p>"  ;
    }
    else{
      echo "<p> error </p>";
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
