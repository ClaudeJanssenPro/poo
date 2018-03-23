<?php
class Voiture
{
  private $_plate;     // numéro d'immatriculation
  private $_date;      // date de mise en circulation
  private $_km;        // kilométrage
  private $_model;     // modèle
  private $_brand;     // marque
  private $_color;     // couleur
  private $_mass;      // poids

//### Lors de l'instanciation de la class pouvoir déterminer si
public function avail() // (availability)Le modèle est `Audi` elle est d'office `reserved` sinon elle est `free`
{

}
public function type() // utilitaire ou commercial selon son poids (>3,5 tonnes)
{

}
public function origin() // Belgique, la France ou l'Allemagne si l'imatriculation commence par `BE`,`FR` ,`DE`
{

}
public function worn() // (usure) Déterminer si elle a beaucoup servi `low < 100.000` ou `middle > 100.000` ou `high > 200.000` selon le kilométrage
{

}
public function age() // nombre d'années depuis la date de mise en circulation
{

}
//### Changements
  public function drive() // fait "avancer la voiture de 100 000 km" et fait passer l'usure de `low` à `high`
  {

  }
//### Affichage
  public function display() // afficher la photo de la voiture et ses caractéristiques dans un tableau HTML.
  {

  }

//°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
  private $_data;

  public function __construct($_data = array())
  {
    $this->data=$_data;
  }

  private function getValue($index)
  {
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }


  public function input($name)
  {
    return $this->surround(
      '<input type="text" name="' . $name . '"  placeholder="' . $name . '" value="' .$this->getValue($name) .'">'
    );
  }

  public function submit()
  {
    return $this->surround('<button type="submit">Envoyer</button>');
  }
}








?>
