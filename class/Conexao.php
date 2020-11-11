<?php
class Conexao
{
	private static $pdo;
	public static function conectar(){
		if(self::$pdo==null){
			try{
				self::$pdo=new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS,[PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8']);
				self::$pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} catch(Exception $e){
				echo "Não foi possível conectar ao banco de dados";
			}
		}
		return self::$pdo;
	}
}
?>