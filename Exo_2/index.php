<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_2 Part_3</title>
</head>
<body>
    <div class="container">
        <h1 class="text-danger text-center">## Exercice 2  Partie 3</h1>
        <h2>
            Créez une fonction qui retourne une chaîne de caractère
        </h2>
        <?php

        $text = 'Yo !';
            function returnText($string){
                return $string;
            }
            echo returnText($text);

            ?>

            <?php

            function returnTextAgain($string = 'Hey yo !'){
                return $string;
            }
            echo returnTextAgain();

        ?>
    </div>
    </html>