<?php

require_once('model/SongsManager.php');
require_once('model/VideosManager.php');

function accueil($twig, $message){
	if ($message == 'emailsent'){
		$message = 'Un email de confirmation vous a été envoyé';
	}
	echo $twig->render('accueil.twig', array('message' => $message));
	
}

function error($twig, $errorMessage){
	echo $twig->render('erreur.twig',  array('errorMessage' => $errorMessage));
}

function ingame($twig, $id){
	$songsManager = new SongsManager();
	$favSongsId = $songsManager->getFavSongsId($id);
	
	$video = new VideosManager();
	$videoWay = $video->getVideoWay($id);
	echo $twig->render('ingame.twig',  array('favSongs' => $favSongsId, 'videos' => $videoWay));
}

function addNewVideo($link, $id){
	$video = new VideosManager();
	$newVideo = $video->addVideoLink($link, $id);
	header('Location: http://localhost/appliJDR/index?action=ingame');
}


function removeVideo($link, $id){
	$video = new VideosManager();
	$removeVideo = $video->removeVideoLink($link, $id);
	header('Location: http://localhost/appliJDR/index?action=ingame');
}

function account($twig, $message){
	if($message == 'fail'){
		$message = "Mot de passe incorrect";
	}
	echo $twig->render('account.twig', array('message' =>$message));

}