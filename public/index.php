<?php

	use App\Autoloader;

	require '../app/models/Autoloader.php';
	Autoloader::register();

	ob_start();
	if(isset($_GET['p'])){
		$p = $_GET['p'];
	} else{
		$p = 'accueil';
	}

	if($p === 'accueil'){
		require '../pages/accueil.php';
	}
	$content = ob_get_clean();

	require '../pages/templates/defaut.php';

?>


