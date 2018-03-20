<?php
// °°°°°°°°°°°°°°°°°°°°°°°°°° Debug °°°°°°°°°°°°°°°°°°°°°°°°°°
require_once('controllers/debug.php');
// °°°°°°°°°°°°°°°°°°°°°°°°°° Defines °°°°°°°°°°°°°°°°°°°°°°°°°°
require_once('controllers/defines.php');
// °°°°°°°°°°°°°°°°°°°°°°°°°° HookUp °°°°°°°°°°°°°°°°°°°°°°°°°°
class Connexion
{
  private static $_instance;
  public function __construct()
  {
  }
  public static function getInstance()
  {
    if (!isset(self::$_instance))
    {
      try
      {
        static::$_instance = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD,[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
        static::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $e)
      {
        die('Erreur : '.$e->getMessage());
      }
    }
        return static::$_instance;
  }
}
?>
