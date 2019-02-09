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
	$userSignUp= new UsersManager();
	$userSignUp = $userSignUp->signUp($pseudo, $password, $mail);
	header('Location:index.php');
	exit();
}

