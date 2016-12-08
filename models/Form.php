<?php

	/**
	 * @class Form
	 * Permet de générer un formulaire simplement
	**/
	class Form{

		/**
		 * @var array Données utilisées par le formulaire
		 **/
		private $data;
		public $surround = 'p';

		/**
		 * @param $data array Données utilisées par le formulaire
		 * @return string
		**/
		public function __construct($data = array()){
			$this->data = $data;
		}

		/**
		 * @param $html string Code HTML à entourer
		 * @return string
		**/
		private function surround($html){
			return '<'. $this->surround .'>'. $html .'</'. $this->surround .'>';
		}

		/**
		 * @param $index string Index de la valeur à récupérer
		 * @return string
		**/
		private function getValue($index){
			return isset($this->data[$index]) ? $this->data[$index] : null;
		}

		/**
		 * @param $name string
		 * @return string
		**/
		public function input($type, $name){
			return $this->surround('<input type="'. $type .'" name="'. $name .'" value="'. $this->getValue($name) .'">');
		}

		/**
		 * @return string
		**/
		public function submit(){
			return $this->surround('<button type="submit">Envoyer</button>');
		}

	}

?>
