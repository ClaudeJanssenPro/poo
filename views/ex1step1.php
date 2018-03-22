<!-- https://github.com/becodeorg/Turing-promo-4/blob/master/parcours/5-PHP-POO/POO-Helpers-Class-etape-1.md -->
<?php
  // °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/debug.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°° DB Connect °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/step1form.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°°
  $form = new Form($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO: Helpers Class : Ètape 1</title>
  </head>
  <body>
    <h1>Objectif</h1>
    <p>
      Créer une classe `Form` qui s'occupera de générer les différents éléments du formulaires.
      Pour la classe `Form` Vous n'êtes pas obligé de vous baser sur l'exemple plus haut.

      Cette classe devra avoir des méthodes et des propriétés afin de pouvoir générer :
      <ul>
        <li>- Le début d'un formulaire `<form ...>`</li>
        <li>- Un input text `<input type="text"...>`</li>
        <li>- Un select `<select ...> ...</select>`</li>
        <li>- Un bouton submit `<button type="submit"></button>`</li>
        <li>- Un textarea `<textarea ...> ...</textarea>`</li>
        <li>- Un radio button `<textarea ...> ...</textarea>`</li>
        <li>- Une checkbox `<input type="radio"...>`</li>
      </ul>
      Vous devez créer cette classes en pensant qu'elles devront être utilisées par un autre développeur.
      Utilisez des noms de propriétés et de méthodes qui ont du sens, restez simple et commentez votre code.
    </p>
    <form action="#" method="post">
      <?php
        echo $form->text('Text');
        echo $form->textarea('TextArea');
        echo $form->select();
        echo $form->radio('Radio');
        echo $form->checkbox('CheckBox');
        echo $form->submit();
       ?>
    </form>
  </body>
</html>
