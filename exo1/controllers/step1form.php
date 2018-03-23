<!-- Créer une classe `Form` qui s'occupera de générer les différents éléments du formulaires.
Pour la classe `Form` Vous n'êtes pas obligé de vous baser sur l'exemple plus haut.

Cette classe devra avoir des méthodes et des propriétés afin de pouvoir générer :

- Le début d'un formulaire `<form ...>`
- OK Un input text `<input type="text"...>`
- OK Un select `<select ...> ...</select>`
- OK Un bouton submit `<button type="submit"></button>`
- OK Un textarea `<textarea ...> ...</textarea>`
- OK Un radio button `<textarea ...> ...</textarea>`
- OK Une checkbox `<input type="radio"...>`

Vous devez créer cette classes en pensant qu'elles devront être utilisées par un autre développeur.
Utilisez des noms de propriétés et de méthodes qui ont du sens, restez simple et commentez votre code. -->
<?php
class Form
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
