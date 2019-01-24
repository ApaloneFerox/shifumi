<?php
require_once ('php/library.php');
    /*
        SHIFUMI RESULTAT
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHIFUMI : DO YOU WIN ?</title>
</head>
<body>
    <?php
        $gamer = "fu";
        $bot = "fu";

        $theWinnerIs = theWinnerIs($gamer,$bot); // Gamer First !
        /*
            renvoit :
                - gamer
                - bot
                - execo
                - error
        */
        switch ($theWinnerIs) {
            case 'gamer':
                # code...
                ?>
                <h2> Vous avez gagner contre cet imbécile de Bot</h2>
                <?php
                break;
            case 'bot':
                # code...
                ?>
                <h2> Vous êtes nul, personne de surpasse un Bot !</h2>
                <?php
                break;
            case 'execo':
                # code...
                ?>
                <h2> Respect ! Aucun vainqueur! Il va falloir recommencer pour vous départager</h2>
                <?php
                break;
            case 'error':
                # code...
            default:
                # code...
                ?>
                <h2> Il y a une erreur quelque part . . .</h2>
                <?php
                break;
        }
    ?>
</body>
</html>