<?php
// DB
define('SQL_HOST','http://10.203.0.127');
define('SQL_DBNAME','claude');
define('SQL_CHARSET','utf8mb4');
define('SQL_DSN','mysql:host=SQL_HOST;dbname=SQL_DBNAME;charset=SQL_CHARSET');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', 'root');
define('SQL_OPTIONS', 'PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC');
// Paths
define('CONTROLLERS', './controllers/');
define('VIEWS', './views/');
define('CSS', 'assets/css/');
define('MODELS', './models/');
// $URL = $_SERVER['REQUEST_URI'];
?>
