<?php 

	/**
	* Conexion a bbdd usando mysqli
	*/
	class Connect 
	{
		
		public static function connection(){
			$cnx = new mysqli('localhost', 'root', '', 'travel');
			$cnx->set_charset("utf8");
			return $cnx;
		}
	}
?>