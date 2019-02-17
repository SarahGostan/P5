<?php

require_once('model/SongsManager.php');
require_once('model/VideosManager.php');

function accueil($twig){

	echo $twig->render('accueil.twig');
	
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
	echo $twig->render('account.twig', array('message' =>$message));
	}
	else{
		echo $twig->render('account.twig');
	}
}