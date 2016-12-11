<?php
	namespace App\services;
	use \PDO;

	class DbService{

		public static function getConnexion(){
			return new PDO('mysql:dbname=todolist;host=localhost', 'root', '');

		}
	}

?>
