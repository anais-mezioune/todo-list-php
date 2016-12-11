<?php
	namespace App;
	use App\services\TacheService;

	class Tache{

		const ETAT = "todo";
		private $etat = "todo";
		private $nom;


		/* ****************************** CONSTRUCT ****************************** */
		public function __construct($nom ="", $etat = "todo"){
			$this->nom = $nom;
			$this->etat = $etat;
		}

		public static function findByName($nom){
			TacheService::tacheByName($nom);
		}

		public static function findAll(){
			TacheService::taches();
		}

		public static function ajouterTache($nom){
			TacheService::ajouterTache($nom, SELF::ETAT);
		}
		/* ****************************** GETTERS ****************************** */
		public function getEtat(){
			return $this->etat;
		}

		public function getNom(){
			return $this->nom;
		}

		/* ****************************** SETTERS ****************************** */
		public function setEtat($etat){
			$this->etat = $etat;
		}

		public function setNom($nom){
			$this->nom = $nom;
		}
	}

?>
