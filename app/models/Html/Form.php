<?php

	namespace App\Html;

	/**
	 * @class Form
	 * Permet de générer un formulaire simplement
	**/
	class Form extends BalisesHTML{

		public $url = 'http://localhost/monprojet/public/';
		const METHOD = 'POST';


		public function formulaire($id, $html){
			return '<form action="'.  $this->url.'" method="'. self::METHOD .'" id="'. $id .'" >'. $html .'</form>';
		}

		/**
		 * @return string
		**/
		public function submit($id, $name){
			return '<button type="submit" id="'. $id .'">'. $name .'</button>';
		}

		public function message($form){
			if(isset($_SESSION["messages"])){
				if(isset($_SESSION["messages"]["messageErreur"]) || isset($_SESSION["messages"]["messageInfo"])){
					$form->tag = 'p';
					if(isset($_SESSION["messages"]["messageInfo"])){
						$message = $form->surround('message_info', $_SESSION["messages"]["messageInfo"]);
					} else if(isset($_SESSION["messages"]["messageErreur"])){
						$message = $form->surround('message_erreur', $_SESSION["messages"]["messageErreur"]);
					} else{
						$message = "";
					}
					unset($_SESSION["messages"]);
				}
			} else{
				$message = "";
			}
			return $message;
		}

	}

?>
