<?php
	namespace App\services;
	use App\services\DbService;
	use \PDO;

	class TacheService{

		public static function taches(){
			$conn = DbService::getConnexion();
			$stmt = $conn->query('select nom, etat from tache');
			$conn = null;
			return $stmt;
		}

		public static function tacheByName($nomTache){
			$conn = DbService::getConnexion();
			$stmt = $conn->prepare('select nom, etat from tache where nom=:nomTache');
			$stmt->bindParam(':nomTache', $nomTache);
			$stmt->execute();
			$conn = null;
			return $stmt->fetch();
		}

		public static function ajouterTache($nom, $etat){
			$conn = DbService::getConnexion();
			$stmt = $conn->prepare('insert into tache (nom, etat) values (?, ?)');
			$stmt->bindParam(1, $nom, PDO::PARAM_STR);
			$stmt->bindParam(2, $etat, PDO::PARAM_STR);
			$stmt->execute();
			$_SESSION["messages"]['messageInfo'] = "La tâche a été ajoutée";
			$conn = null;
			return $stmt->fetch(PDO::FETCH_ASSOC);
			//$query = 'insert into tache (nom, etat) values ("'. $nom .'", "'. $etat .'")';
		}

	}

?>
