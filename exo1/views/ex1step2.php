<!-- https://github.com/becodeorg/Turing-promo-4/blob/master/parcours/5-PHP-POO/POO-Helpers-Class-Ètape-2.md -->
<?php
  // °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/debug.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°° DB Connect °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/step2html.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°°
  $html = new Html();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <h1>Objectif</h1>
    <p>
      Créer une class Html ( dans un fichier séparé ) qui va générer différents éléments HTML :
      <ul>
        <li>Créer des Balises meta <meta ...></li>
        <li>Lier des Fichiers CSS <link rel="stylesheet" ...></li>
        <li>Lier des Fichiers Javascript</li>
        <li>Lier des Images <img src="..."></li>
        <li>Créer des Liens <a href="..."></li>
      </ul>
    </p>
  <?php
  echo $html->meta('charset="UTF-8"');
  echo $html->meta('name="viewport" content="width=device-width, initial-scale=1.0"');
  echo $html->meta('http-equiv="X-UA-Compatible" content="ie=edge"');
  echo $html->script('charset="UTF-8"');
   ?>
    <title>POO: Helpers Class : Ètape 2</title>
  </head>
  <body>
    <?= $html->img('images/sea-418742_1920.jpg');?>
    <p>Some text</p>
    <?= $html->ahref('https://www.w3schools.com/html/');?>
  </body>
</html>
