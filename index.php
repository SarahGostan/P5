<?php



require 'vendor/autoload.php';
require 'class/global.php';
require 'controller/LogsController.php';

checkAuth();
$loader = new Twig_Loader_Filesystem(__DIR__ . '/view');
$twig = new Twig_Environment($loader, [
	'cache' => false, //__DIR__ . '/tmp'
	'debug' => true
]);
$twig->addExtension(new Twig_Extension_Debug);
$twig->addExtension(new Project_Twig_Extension);

ini_set('display_errors', 1);
error_reporting( E_ALL );

	
	require('controller/frontend.php');
	$page = 'home';
	
try{
	
	if (isset($_GET['action']))
		{	
	$page = $_GET['action'];
	switch($page)
		{
			case 'ingame':
			checkAuth();
			if (isset($_SESSION['id'])){
				$id = $_SESSION['id'];
				
			}
			else{
				$id = 0;
			}
				ingame($twig, $id);
				break;
				
			case 'allsongs':
				allSongs($twig);
				break;
				
			case 'login':
				login($twig);
				break;
			
			case 'addSong':
			
			$_POST['fonction'];
		$param = json_decode($_POST['params'])	;
			addSong($param[0], $param[1]);
				break;
									
			case 'inscription':
				inscription($twig);
				break;
				
			case 'signup':
				signup($_POST['pseudo'], $_POST['password'],  $_POST['mail']);
				break;
						
			case 'logout':
				logout($twig);
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