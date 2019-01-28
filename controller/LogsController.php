<?php

require_once('model/UsersManager.php');
require_once('class/UserSession.php');


function login($twig){
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