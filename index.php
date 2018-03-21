<!-- ## Exercice 1 : Helpers Class
## Exercice 2
## Exercice 3

## Challenge 1
## Challenge 2 -->

<?php
  // °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('controllers/debug.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°° DB Connect °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('controllers/dbco2.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°° DB Query °°°°°°°°°°°°°°°°°°°°°°°°°°
  $pdo = Connexion::getInstance();
  $ecars = $pdo->query('SELECT * FROM poochallenge01 ORDER BY id DESC');
  $fetch_ecars = $ecars->fetchAll(PDO::FETCH_ASSOC);
    echo "<h1>Voitures électriques</h1>";
    echo '<pre>';
      print_r ($fetch_ecars);
    echo '</pre>';
    echo '<hr>';
    echo '<br>';
?>
