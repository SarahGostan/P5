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

