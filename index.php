<?php



require 'vendor/autoload.php';
require 'class/global.php';
require 'controller/LogsController.php';
require 'controller/SongsController.php';

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
	
	if (isset($_GET['message'])){
				$message = $_GET['message'];
			}
			else{
				$message = "";
			}
	
	if (isset($_GET['action']))
		{	
	
	if (strstr($_GET['action'], 'account'))
		{
			
			if (!isset($_SESSION['id']))
			{	
			throw new Exception ("Vous devez être connecté pour effectuer cette action");
			exit();
			}
		}
	$page = $_GET['action'];	
	
	switch($page)
		{
			
		/* AFFICHAGE DE PAGES */

		case 'login':
				if (!isset($_SESSION['id']))
			{	
				login($twig, $message);
			}
			else{
				accueil($twig, $message);
			}
				break;
				
		case 'inscription':
				inscription($twig);
				break;
				
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
			checkAuth();
			if (isset($_SESSION['id'])){
				$id = $_SESSION['id'];
				
			}
			else{
				$id = 0;
			}
				allSongs($twig, $_SESSION['id']);
				break;
				
			case 'resetpassword':
			if (isset($_POST['mail']) AND $_POST['mail'] != null)
			{
				$mail = $_POST['mail'];
				sendPassword($mail);
			}
			else 
			{
				accueil($twig, $message);
			}
			break;
					
		/* GESTION DE COMPTE UTILISATEUR */		
				
		case 'signup':
		if (!empty($_POST['password']) && !empty($_POST['mail'])){
			signup($_POST['password'],  $_POST['mail'], $message, $twig);
		}
		else{
			throw new Exception('La page demandée est invalide');
		}
			break;
						
		case 'logout':
			logout($twig);
			break;
		
		case 'validation':
			logout($twig);
			validAccount($_GET['pseudo'], $_GET['key']);
			break;
			
				
		case 'authenticize':
			if (!empty($_POST['identifiant']) && !empty($_POST['password'])){
				authenticize($_POST['identifiant'], $_POST['password'], $twig);
			}
			else{
				$message = "Email ou mot de passe manquant";
				login($twig, $message);
			}
				break;
				
			default:
				accueil($twig, $message);
				break;
				
			case 'account':
				account($twig, $message);
				break;
			
			case 'accountChangePassword':
				accountChangePassword($_SESSION['id'], $_POST['actualPassword'], $_POST['newPassword']);
				break;
				
		
			
			
			case 'accountAddVideo':
				if(!isset($_POST['videoLink'])){
					throw new Exception ("Fumble !");
				}
				else{
				addNewVideo($_POST['videoLink'], $_SESSION['id']);
				}
				break;
				
			case 'accountRemoveVideo':
			if(!isset($_POST['videoLink'])){
					throw new Exception ("Fumble !");
				}
			else{
			removeVideo($_POST['videoLink'], $_SESSION['id']);
			}
			break;
				
			
			
			case 'accountAddSong':
			$_POST['fonction'];
			addSong($_SESSION['id'], $_POST['songId']);
				break;
				
			case 'accountRemoveSong':
			$_POST['fonction'];
			removeSong($_SESSION['id'], $_POST['songId']);
				break;
				
									
			
		}
	}
	
	
		/* Page d'index par défaut */
	else
	{	
				accueil($twig, $message);
	}
}
		/* Affichage de la page d'erreur */
catch(Exception $e){
	http_response_code(404);
	$errorMessage = $e->getMessage();
	error($twig, $errorMessage);
}