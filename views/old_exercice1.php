<?php
  // °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/debug.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°° DB Connect °°°°°°°°°°°°°°°°°°°°°°°°°°
  require_once('../controllers/form.php');
  // °°°°°°°°°°°°°°°°°°°°°°°°°°
  $form = new Form($_POST);
  // (
  //   array
  //   (
  //   'username' => 'Roger'
  //   )
  // );
  // var_dump($form->data);
  // die();

  // $form = new Form ();
  // echo $form->input('aze');
  // echo $form->input('aze');
  // echo $form->input('aze');
  // echo $form->input('aze');
  // echo $form->input('aze');
  // echo $form->submit();
?>

<form action="#" method="post">
<?php

echo $form->input('username');
echo $form->input('password');
echo $form->submit();

 ?>
</form>
