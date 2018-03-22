<?

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
    <h1># POO: Parc de voitures</h1>

    <h2>## Objectifs</h2>

    <p>
      On souhaite simuler une gestion de parc de véhicules, on va donc crée une `class Voiture`

    Un véhicule est caractérisé par :
    <ul>
    <li>- un numéro d'immatriculation</li>
    <li>- une date de mise en circulation</li>
    <li>- un kilométrage</li>
    <li>- un modèle</li>
    <li>- une marque</li>
    <li>- une couleur</li>
    <li>- un poids</li>

    <h3>### Lors de l'instanciation de la class pouvoir déterminer si :</h3>
    <ul>
    <li>- Le modèle est `Audi` elle est d'office `reserved` sinon elle est `free`</li>
    <li>- Le véhicule est un utilitaire ou commerciale selon son poids ( > 3,5 tonnes)</li>
    <li>- Le pays d'ou proviens la voiture est la Belgique, la France ou l'Allemagne si l'imatriculation commence par `BE`,`FR` ,`DE`</li>
    <li>- Déterminer si elle a beaucoup servi `low < 100.000` ou `middle > 100.000` ou `hight > 200.000` selon le kilometrage</li>
    <li>- Calculer le nombre d'années depuis la date de mise en circulation</li>

    <h3>### Changements</h3>

    Faire de sorte que si :
    <ul>
    <li>- Le kilométrage change, la `class` doit refaire la condition pour savoir si elle a beaucoup servi</li>
    <li>- Que l'on ne puisse **pas changer** la date de mise en circulation</li>
    <li>- Que l'on ne puisse **pas changer** numéro d'immatriculation</li>
    <li>- Que l'on ne puisse **pas changer** le modèle</li>
    <li>- Que l'on ne puisse **pas changer** la une marque</li>
    </ul>

    Crée un fonction `rouler` qui fait "avancer la voiture de 100 000 km" et que l'usure passe de `low` à `hight`
    Personne ne peux éxécuter les méthodes de la `class` qui permettent de faire conditions réutilisables.

    <h3>### Affichage</h3>

    - Crée une méthode `display` qui permet d'afficher la photo de la voiture et ses caractéristiques dans un tableau HTML.
    - Affiche 9 voitures différentes

    <h3>### Ressources</h3>

    [Tu trouvera ici des images et des modèles de voitures](http://www.cars-data.com/)
    </p>
  </body>
</html>
