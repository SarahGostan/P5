<?php

require_once('model/UsersManager.php');
require_once('class/UserSession.php');


function login($twig){
	echo $twig->render('login.twig');
}

function inscription($twig){
	echo $twig->render('inscription.twig');
}

function logout($twig){
	$userSession = new UserSession();
	$userSession = $userSession->logout();
	echo $twig->render('login.twig');
}

function authenticize($pseudo, $password){
	
	$adminManager = new UsersManager();
	$login = $adminManager->login($pseudo, $password);
	if ($login == false){
		throw new Exception('Identifiant ou mot de passe incorrect.');
	}
	else {
		$sessionCreate = new UserSession();
		$sessionCreate->login($login['id'], $login['pseudo']);
		header('Location:index.php');
		exit();
 	} 
}

function checkAuth(){
	$userSession = new UserSession();
	$checkAuth = $userSession->isAuthenticated();
	if ($checkAuth == true){
		return $_SESSION['id'];
	}
}

	function signup($pseudo, $password, $mail){
	$key = md5(microtime(TRUE)*100000);
	$userSignUp= new UsersManager();
	$userSignUp = $userSignUp->signUp($pseudo, $password, $mail, $key);
	$message = 'Bienvenue ' . $pseudo . ' sur cette application qui aura bientôt un nom,
 
Pour activer votre compte, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.
 
localhost/appliJDR/index.php?action=validaccount&pseudo='.urlencode($pseudo).'&key='.urlencode($key).'
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
$sujet = 'Activation de votre compte';
$entete = "From: inscription@jaipasencoretrouvedenom.com" ;
mail($mail, $sujet, $message, $entete);
header('Location:index.php');
exit();
}

function validAccount($pseudo, $key){
	$checkAccount = new UsersManager();
	$checkVal = $checkAccount->validUser($pseudo, $key);
	if($checkVal > 0){
		throw new Exception('Compte validé ! Vous pouvez désormais vous connecter.' . $checkVal);
	}
	else{
		throw new Exception('Une erreur est intervenue ' . $pseudo . ' dans la validation du compte ' . $key . '. Le lien peut-être invalide, ou le compte a déjà été validé.' . $checkVal);
	}
		
}



	