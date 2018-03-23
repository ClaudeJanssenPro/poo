<!--
#Objectif

Créer une class Validator qui va servir à valider les données envoyées par le formulaire. Cette classe contiendra des méthodes qui pourront valider : - une chaine de caractère - un entier - un nombre à virgule - etc.
-->
<?php
class Validator
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
