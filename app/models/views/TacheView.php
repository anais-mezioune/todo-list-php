<?php

	namespace App\views;
	use App\Html\Form;

	class TacheView{

		// public $form = new Form();

		public function formAjoutTache(){
			$form = new Form();
			$text = $form->input('text', 'text_ajouter', 'nouvelleTache', '', 'Ajouter une nouvelle tâche');
			$submit = $form->submit('ajouter', 'Ajouter');
			$message = $form->message($form);
			return $form->section('ajouter_tache', $form->formulaire('formAjouter', $text .''. $submit .''. $message));
		}

		public function formArchiverTache(){
			$form = new Form();
			$tacheView = new TacheView();
			$submit = $form->submit('archiver', 'Archiver');
			$archiver = $form->span('span_archiver', $form->formulaire('formAjouter', '['. $form->formulaire('formArchiver', $submit) .']'));
			return $form->section('archiver_tache', $form->formulaire('formAjouter', $archiver));
		}

	}

?>
