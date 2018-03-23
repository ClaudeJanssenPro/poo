<?
// °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
require_once('../controllers/debug.php');
// °°°°°°°°°°°°°°°°°°°°°°°°°° DB Connect °°°°°°°°°°°°°°°°°°°°°°°°°°
require_once('../controllers/step2html.php');
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO: Parc de voitures</title>
  </head>
  <body>
    </br><h1># POO: Parc de voitures</h1></br>
    </br><h2>## Objectifs</h2></br>
    <p>
      On souhaite simuler une gestion de parc de véhicules, on va donc crée une `class Voiture`</br>
      Un véhicule est caractérisé par :</br>
    <ul>
    <li>- un numéro d'immatriculation</li>
    <li>- une date de mise en circulation</li>
    <li>- un kilométrage</li>
    <li>- un modèle</li>
    <li>- une marque</li>
    <li>- une couleur</li>
    <li>- un poids</li>
    </ul>
    </br><h3>### Lors de l'instanciation de la class pouvoir déterminer si :</h3></br>
    <ul>
      <li>- Le modèle est `Audi` elle est d'office `reserved` sinon elle est `free`</li>
      <li>- Le véhicule est utilitaire ou commercial selon son poids ( > 3,5 tonnes)</li>
      <li>- Le pays d'où provient la voiture est la Belgique, la France ou l'Allemagne si l'imatriculation commence par `BE`,`FR` ,`DE`</li>
      <li>- Déterminer si elle a beaucoup servi `low < 100.000` ou `middle > 100.000` ou `high > 200.000` selon le kilometrage</li>
      <li>- Calculer le nombre d'années depuis la date de mise en circulation</li>
    </ul>
    </br><h3>### Changements</h3></br>
    Faire de sorte que :</br>
    <ul>
      <li>- si le kilométrage change, la `class` doit refaire la condition pour savoir si elle a beaucoup servi</li>
      <li>- l'on ne puisse **pas changer** la date de mise en circulation (private)</li>
      <li>- l'on ne puisse **pas changer** numéro d'immatriculation (private)</li>
      <li>- l'on ne puisse **pas changer** le modèle (private)</li>
      <li>- l'on ne puisse **pas changer** la une marque (private)</li>
    </ul>
    </br>
    Crée une fonction `drive` qui fait "avancer la voiture de 100 000 km" et que l'usure passe de `low` à `high`</br>
    </br><h3>### Affichage</h3></br>
    Crée une méthode `display` qui permet d'afficher la photo de la voiture et ses caractéristiques dans un tableau HTML
    </br>
      <a href="http://www.cars-data.com/">Tu trouveras ici des images et des modèles de voitures
      </a>
    </p>
  </body>
</html>
