<!--
Créer une class Html ( dans un fichier séparé ) qui va générer différents éléments HTML :
    Créer des Balises meta <meta ...>
    Lier des Fichiers CSS <link rel="stylesheet" ...>
    Lier des Fichiers Javascript
    Lier des Images <img src="...">
    Créer des Liens <a href="...">
°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>POO Exercice 1 : Helpers Class</title>
    </head>
    <body>
    </body>
    </html>
-->
<?php
class Html
{
  private $_data;
  public $surround = 'p';
  public function __construct($_data = array())
  {
    $this->data=$_data;
  }
  private function surround($html)
  {
    return "<{$this->surround}>$html</{$this->surround}>";
  }
  private function getValue($index)
  {
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }
  public function text($name)
  {
    return $this->surround(
      '<input type="text" name="' . $name . '"  placeholder="' . $name . '" value="' .$this->getValue($name) .'">'
    );
  }
  public function textarea($name)
  {
    return $this->surround(
      '<input type="textarea" name="' . $name . '"  placeholder="' . $name . '" value="' .$this->getValue($name) .'">'
    );
  }
  public function select()
  {
    return $this->surround(
      '<select>
       <option></option>
       <option></option>
      </select>'
    );
  }
  public function radio($name)
  {
    return $this->surround(
      '<input type="radio" name="' . $name . '" value="' .$this->getValue($name) .'">'
    );
  }
  public function checkbox($name)
  {
    return $this->surround(
      '<input type="checkBox" name="' . $name . '" value="' .$this->getValue($name) .'">'
    );
  }
  public function submit()
  {
    return $this->surround('<button type="submit">Envoyer</button>');
  }

}
?>
