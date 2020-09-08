<?php 
namespace app\model;

 class Conexao
 {
 	private static $instancia;

 	public static function getConn()
 	{
 		if( !isset(self::$instancia))
 		{
 self::$instancia = new \PDO("mysql:dbname=reino_acai;host=localhost;charset=utf8","root","");
 		}
 		return self::$instancia;

 	}

 }





?>