<?php
  // °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/debug.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°° DB Connect °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/form.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°°
  $form = new Form ();
  echo $form->input('username');
  echo $form->input('password');
  echo $form->submit();


?>
