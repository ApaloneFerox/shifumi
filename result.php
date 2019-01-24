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
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
    <title>SHI-FU-MI : DO YOU WIN ?</title>
</head>

<body>
    

   <h1>Shi-fu-mi</h1>

   <div class="result">
        <img src="img/leaf.svg" alt="Image joueur">


       <?php
        $gamer = $_POST['gamerChoice'];
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

    
       <img src="img/stone.svg" alt="Image ordinateur">
   </div>

    <div class="buttonAgain">
    <label for="again">Try again ! </label>
    <a href="index.php"><input type="button" name="again" value="もう一度やり直してください"></a>
    </div>

</body>
</html>