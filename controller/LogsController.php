<?php

require_once('model/UsersManager.php');
require_once('class/UserSession.php');


function login($twig, $message){
	if($message == 'fail'){
		$message="Echec de la connexion";
	echo $twig->render('login.twig', array('message' => $message));
	}
	else{
		echo $twig->render('login.twig');
	}
}

function inscription($twig){
	echo $twig->render('inscription.twig');
}

function logout($twig){
	$userSession = new UserSession();
	$userSession = $userSession->logout();
	echo $twig->render('login.twig');
}

function authenticize($mail, $password){
	
	$adminManager = new UsersManager();
	$login = $adminManager->login($mail, $password);
	if ($login == false){
		header('Location:index.php?action=login&message=fail');
	}
	else {
		$sessionCreate = new UserSession();
		$sessionCreate->login($login['id']);
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

	function signup($password, $mail, $message){
	$key = md5(microtime(TRUE)*100000);
	$userSignUp= new UsersManager();
	$userSignUp = $userSignUp->signUp($pseudo, $password, $mail, $key);
	$content = 'Bienvenue sur l\'Ecran du MJ,
 
Pour activer votre compte, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.
 
localhost/appliJDR/index.php?action=validaccount&mail='.urlencode($mail).'&key='.urlencode($key).'
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
$sujet = 'Activation de votre compte';
$entete = "From: inscription@jaipasencoretrouvedenom.com" ;
mail($mail, $sujet, $content, $entete);
header('Location:index.php');
exit();
}

function validAccount($mail, $key){
	$checkAccount = new UsersManager();
	$checkVal = $checkAccount->validUser($mail, $key);
	if($checkVal > 0){
		throw new Exception('Compte validé ! Vous pouvez désormais vous connecter.' . $checkVal);
	}
	else{
		throw new Exception('Une erreur est intervenue dans la validation du compte ' . $key . '. Le lien peut-être invalide, ou le compte a déjà été validé.' . $checkVal);
	}
		
}

function accountChangePassword($id, $actualPass, $newPass){
	$passwordManage = new UsersManager();
	$passwordCheck = $passwordManage->checkPassword($id, $actualPass, $newPass);
	if($passwordCheck == true){
		header('Location:index.php');
	}
	else{
		header('location:index?action=account&message=fail');
	}
}



	