<?php

require 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(__DIR__ . '/view');
$twig = new Twig_Environment($loader, [
	'cache' => false, //__DIR__ . '/tmp'
	'debug' => true
]);
$twig->addExtension(new Twig_Extension_Debug);

ini_set('display_errors', 1);
error_reporting( E_ALL );

	require('controller/LogsController.php');
	require('controller/frontend.php');
	$page = 'home';
	
try{
	
	if (isset($_GET['action']))
		{	
	$page = $_GET['action'];
	switch($page)
		{
			case 'ingame':
				ingame($twig);
				break;
			case 'login':
				login($twig);
				break;
			case 'authenticize':
				if (!empty($_POST['identifiant']) && !empty($_POST['password'])){
					authenticize($_POST['identifiant'], $_POST['password'], $twig);
				}
				else{
					throw new Exception ('Login ou mot de passe incorrect');
				}
				break;
			default:
				accueil($twig);
				break;
		}
	}
	
	
		/* Page d'index par défaut */
	else
	{	
				accueil($twig);
	}
}
		/* Affichage de la page d'erreur */
catch(Exception $e){
	http_response_code(404);
	$errorMessage = $e->getMessage();
	error($twig, $errorMessage);
}