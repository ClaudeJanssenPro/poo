<?php
  // °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/debug.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°° DB Connect °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/step1form.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°°
  $form = new Form($_POST);
?>

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
