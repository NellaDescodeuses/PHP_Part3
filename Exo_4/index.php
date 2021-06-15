<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_4 Part_3</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 4  Partie 3</h1>
    <h2>
        Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième" sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième". affichez "les deux nombres sont égaux" si les deux nombres sont identiques.
    </h2>
    <?php 
        $languages = ['1' => 'HTML/CSS', '2' => 'JS', '3'=> 'PHP', '4'=> 'Python', '5' => 'Java'];
        
            foreach ($languages as $clé => $value ){
                ?>
                <p class="mt-4 text-center">
                    <?='J\'affiche seulement les valeurs de mon tableau : ' . $value ?>
                </p>
                <?php
            }
    ?>
  </div>
</html>