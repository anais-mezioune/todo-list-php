<?php

	use App\Tache;
	use App\Html\Form;
	use App\views\TacheView;

	if(isset($_POST['nouvelleTache']) && $_POST['nouvelleTache'] != ""){
		$nomTache = $_POST['nouvelleTache'];
		$tache = Tache::findByName($nomTache);

		if($tache != false){
		    Tache::ajouterTache($nomTache);
		} else{
			$_SESSION["messages"]['messageErreur'] = "La tâche existe déjà";
		}

	} else if(isset($_POST['nouvelleTache'])){
		$_SESSION["messages"]['messageErreur'] = "Veuillez saisir une tache";
	}

	/* ******************************  VARIABLES ****************************** */
	$tacheView = new TacheView();
	$form = new Form();
	$sectionArchiver = $tacheView->formArchiverTache();
	$sectionAjouter = $tacheView->formAjoutTache();

	/* ******************************  VUE HTML ****************************** */
	$html = $form->titre_principal('titre_principal', 'Gestionnaire de tâches');
	$html .= $form->section('todo', $sectionArchiver .''. $sectionAjouter);

	echo $html;
	unset($_POST);

?>

