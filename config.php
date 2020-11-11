<?php
define("DBHOST", "localhost");
define("DBNAME", "koob");
define("DBUSER", "root");
define("DBPASS", "");
session_start();

date_default_timezone_set('America/Sao_Paulo');
$autoclass=function($class){
	include('class/'.$class.'.php');
};
spl_autoload_register($autoclass)

?>