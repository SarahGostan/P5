<?php

require_once('model/SongsManager.php');
require_once('model/VideosManager.php');
require_once('model/GamesManager.php');


function accueil($twig, $message){
	if ($message == 'emailsent'){
		$message = 'Un email de confirmation vous a été envoyé';
	}
	echo $twig->render('accueil.twig', array('message' => $message));

}



function error($twig, $errorMessage){
	echo $twig->render('erreur.twig',  array('errorMessage' => $errorMessage));
}



function account($twig, $message){
	if($message == 'fail'){
		$message = "Mot de passe incorrect";
	}
	echo $twig->render('account.twig', array('message' =>$message));

}
