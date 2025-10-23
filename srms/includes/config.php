<?php 
// DB credentials from environment (fallback to defaults)
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_NAME', getenv('DB_NAME') ?: 'srms');

try
{
  $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
  $dbh = new PDO($dsn, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
  exit("Error: " . $e->getMessage());
}
?>
