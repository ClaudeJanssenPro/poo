<?php
include('debug.php');
// °°°°°°°°°°°°°°°°°°°°°°°°°° Definitions °°°°°°°°°°°°°°°°°°°°°°°°°°
  $host = 'http://10.203.0.127';
  $dbname = "claude";
  $charset = "utf8mb4";
  $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
  $user = "root";
  $pass = "root";
  $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];
// °°°°°°°°°°°°°°°°°°°°°°°°°° HookUp °°°°°°°°°°°°°°°°°°°°°°°°°°
class Connexion extends PDO{
  private static $_instance;
  public function __construct() {
  }
  public static function getInstance() {
    if (!isset(self::$_instance))
    {
      try
      {
        self::$_instance = new PDO($dsn, $user, $pass, $opt);
        self::$_instance = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD, SQL_OPTIONS);
      }
      catch (Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }
      // return self::$_instance;
    }
  }
}
?>
