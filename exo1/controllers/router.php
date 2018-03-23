<?php

$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';

switch ($action) {
  case 'main':
    require_once ( CONTROLLERS . 'main.php');
    $controller = new MainController();
  break;

  case 'stock':
    require_once ( CONTROLLERS . 'stock.php');
    $controller = new stockController();
  break;

  default:
    require_once ( CONTROLLERS . 'main.php');
    $controller = new MainController();
    break;
}

$controller->run();


 ?>
