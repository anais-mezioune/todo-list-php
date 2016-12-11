<?php

	namespace App\Html;

	class BalisesHTML{

		private $tag = "section";


		/**
		 * @param $html string Code HTML à entourer
		 * @return string
		**/
		public function surround($id, $html){
			return '<'. $this->tag .' id="'. $id .'">'. $html .'</'. $this->tag .'>';
		}

		/**
		 * @param $html string Code HTML à entourer
		 * @return string
		**/
		public function titre_principal($id, $html){
			$this->tag = 'h1';
			return $this->surround($id, $html);
		}

		public function section($id, $html){
			$this->tag = 'section';
			return $this->surround($id, $html);
		}

		public function span($id, $html){
			$this->tag = 'span';
			return $this->surround($id, $html);
		}

		/**
		 * @param $name string
		 * @return string
		**/
		public function input($type, $id, $name, $value, $placeholder){
			return '<input type="'. $type .'" id="'. $id .'" name="'. $name .'" value="'. $value .'" placeholder="'. $placeholder .'" />';
		}

	}

?>
