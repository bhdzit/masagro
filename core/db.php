<?php


class db{

	protected function dbConnection(){
		$mysqlconn= new mysqli("127.0.0.1", "bhdz", "IT25697", "masAgro");
		return $mysqlconn;
	}
	protected function getQuery($sql){
	$mysqli = self::dbConnection(); 
		try{
			$queryres=$mysqli->query($sql)->fetch_assoc();

		}
		catch(Exception $e){
			return "Error en la base de datos";
		}
		return $queryres;
	}
	protected function executeQuery($sql){
		echo("arg1");
		$mysqli = self::dbConnection(); 
		$mysqli->query($sql);


	}
}