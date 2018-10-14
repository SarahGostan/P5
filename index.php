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

	require('controller/frontend.php');
	require('controller/backend.php');
	$page = 'home';
	
try{
	
	if (isset($_GET['action']))
		{	
	$page = $_GET['action'];
	switch($page)
		{
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