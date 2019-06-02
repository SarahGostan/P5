<?php

include __DIR__ . '/vendor/autoload.php';
use \App\Model\Manager;
$manager = new Manager();
use App\Model\UsersManager;
$usersManager = new UsersManager();
use App\Model\SongsManager;
$songsManager = new SongsManager();
use App\Model\GamesManager;
$gamesManager = new GamesManager();


require 'src/Others/global.php';
require 'src/Controller/LogsController.php';
require 'src/Controller/SongsController.php';
require 'src/Controller/GamesController.php';
require 'src/Controller/PagesController.php';



checkAuth();
$loader = new Twig_Loader_Filesystem(__DIR__ . '/src/view');
$twig = new Twig_Environment($loader, [
	'cache' => __DIR__ . '/tmp',
	'debug' => true
]);
$twig->addExtension(new Twig_Extension_Debug);
$twig->addExtension(new Project_Twig_Extension);

ini_set('display_errors', 1);
error_reporting( E_ALL );

$page = 'home';

try{

	if (isset($_GET['message']))
	{
		$message = $_GET['message'];
	}
	else
	{
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

	if (isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
	}
	else
	{
		$id = 0;
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
			else
			{
				accueil($twig, $message);
			}
		break;

		case 'notesCreate':
		if($id > 0){
			$content = $_POST['content'];
			$title = $_POST['title'];
			$gameId = $_POST['gameId'];
			 newNote($content, $title, $gameId, $id);
		}
		else{
			throw new Exception('Vous devez être connecté pour effectuer cette action');
		}
		break;

		case 'accountnewgame':
		$maxsize = 64000;
		$formats = array( 'jpg' , 'jpeg' , 'png' );

		if(empty($_POST['gameName']))
		{
		 throw new Exception('Echec de la création de votre partie. Utilisez un point de fortune, réessayez !');
		}
		else
		{

			if (empty($_FILES['image']['name']))
			{
				$image = false;

			}
			else
			{
				$image = $_FILES['image'];
				var_dump($image);
				$image_sizes = getimagesize($_FILES['image']['tmp_name']);
				$format_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
				if(! in_array($format_upload,$formats))
				{
					Throw new Exception("Ce format de fichier (" . $format_upload . ") n'est pas accepté");
				}
				else if($_FILES['image']['size'] > $maxsize)
				{
					Throw new Exception("Force insuffisante pour supporter ce poids de fichier (" . $_FILES['image']['size'] . "). Selectionnez un fichier moins encombrant.");
				}
			}
			newgame($id, $_POST['gameName'], $image);
		}

			break;



			case 'uploadimage':

			$image_sizes = getimagesize($_FILES['image']['tmp_name']);
			$format_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
			if ($_FILES['image']['error'] > 0) {
			Throw new Exception("Erreur lors du transfert");
			}
			else{
			echo($_FILES['image']['size']);
			echo($_FILES['image']['type']);
			print_r($image_sizes);
			}
			break;

	case 'envoimail':
	$res = mail('sarahgstn@gmail.com', 'test', 'test');
	echo($res);
	break;

		case 'accountsupressgame':
			if (isset($_GET['id']))
			{
				$gameId = $_GET['id'];
				supressGame($gameId, $id);
			}
			else
			{
				$message='Erreur : partie inexistante';
				accueil($twig,  $message);
			}
		break;

		case 'ingame':
			checkAuth();
			if (isset($_GET['id'])){
				ingame($twig, $id, $_GET['id']);
			}
			else
			{
				$message="Id incorrect";
				accueil($twig, $message);
			}
		break;

		case 'allsongs':
			checkAuth();
			if(isset($_GET['page'])){
				$page = (int) $_GET['page'];
				if($page < 1){
					$page = 1;
				}
			}
			else{
				$page = 1;
			}
			if(isset($_POST['songTerm'])){
				$keyword = $_POST['songTerm'];
			}
			else if(isset($_GET['songTerm'])){
					$keyword = $_GET['songTerm'];
			}
			else{
		$keyword = '%';
		}

			allSongs($twig, $id, $page, $keyword);
		break;

		case 'notesEdit':
		$post_id = $_POST['id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$stripContent = strip_tags($content, '<color><h1><h2><br><p><strong><em><u><li><ol><ul>');
			notesEdit($post_id, $title, $stripContent, $id);
		break;


		case 'searchsong':
		$term = $_GET['term'];
		$result = searchSong($term);
		ob_clean();
		echo $result;
		exit;

		case 'jouer':
			getGamesInfos($twig, $id);
		break;

		/* GESTION DE COMPTE UTILISATEUR */

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

		case'guide':
		guide($twig);
		break;

		case 'signup':
		if (!empty($_POST['passwordInscription']) && !empty($_POST['mailInscription'])){
			signup($_POST['passwordInscription'],  $_POST['mailInscription'], $message, $twig);
		}
		else{
			throw new Exception('Impossible de finaliser l\'inscription. Veuillez réessayer plus tard.');
		}
			break;

		case 'logout':
			logout($twig);
			break;

		case 'validation':
			validAccount($_GET['mail'], $_GET['key']);
			break;


		case 'authenticize':
		if($id != 0){
			accueil($twig, $message);
		}
		else if (!empty($_POST['identifiantPage']) && !empty($_POST['passwordLogin'])){
				authenticize($_POST['identifiantPage'], $_POST['passwordLogin'], $twig);
			}
			else{
				$message = "Email ou mot de passe manquant";
				login($twig, $message);
			}
				break;

			case 'account':
				account($twig, $message);
				break;

			case 'accountChangePassword':
				accountChangePassword($_SESSION['id'], $_POST['actualPassword'], $_POST['newPassword']);
				break;

			case 'songFavStatut':
				if(isset($_GET['songId'])){
					$songId = $_GET['songId'];
				}
				else{
					throw new Exception('Vous venez de pénétrer une URL hors jeu. Vous devriez fuir cet endroit au plus vite');
				}
				$result = checkSong($id, $songId);
				echo($result);
				break;

				default:
					accueil($twig, $message);
					break;


/* GESTION DES PARTIES */

			case 'accountAddVideo':
				if(!isset($_POST['videoLink']) || !isset($_POST['gameId'])){
					throw new Exception ("Fumble !");
				}
				else{
				addNewVideo($_POST['videoLink'], $_POST['gameId'], $id);
				}
				break;

			case 'accountRemoveVideo':
			if(!isset($_POST['videoLink']) || !isset($_POST['idGame']) || !isset($_POST['videoId'])){
					throw new Exception ("Fumble !");
				}
			else{
			removeVideo($_POST['videoLink'], $_POST['idGame'], $_POST['videoId'], $id);
			}
			break;

			case 'getGameVideos':
			if(isset($_GET['gameId'])){
				$gameId = $_GET['gameId'];
				$videoLink = getGameVideos($gameId);
				echo($videoLink);
		}
		else{
			throw new Exception("Vous n'êtes pas supposé être ici. Ouste !");
		}
			break;

			case 'accountAddSong':

			addSong($_SESSION['id'], $_POST['songId']);
				break;

			case 'accountRemoveSong':
			removeSong($_SESSION['id'], $_POST['songId']);
				break;

			case 'accountAddSongToGame':
			addSongToGame($_SESSION['id'],  $_POST['gameId'], $_POST['songId']);
				break;
			case 'accountRemoveSongFromGame':
			removeSongFromGame($_SESSION['id'],  $_POST['gameId'], $_POST['songId']);


		}
	}

		/* Page d'index par d�faut */
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
