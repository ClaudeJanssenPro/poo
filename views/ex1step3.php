<!-- https://github.com/becodeorg/Turing-promo-4/blob/master/parcours/5-PHP-POO/POO-Helpers-Class-etape-3.md -->
<?php
  // °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/debug.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°° DB Connect °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/step2html.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°°
  $validator = new Validator();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO: Helpers Class : Ètape 3</title>
  </head>
  <body>
    <h1>Objectif</h1>
    <p>
      Créer une class Validator qui va servir à valider les données envoyées par le formulaire. Cette classe contiendra des méthodes qui pourront valider : - une chaine de caractère - un entier - un nombre à virgule - etc.
    </p>
  </body>
</html>
