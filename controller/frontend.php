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



function addSongToGame($id, $gameId, $songId){
	$gamesManager = new GamesManager();
	$checkGame = $gamesManager->checkGameId($id, $gameId);
	if ($checkGame > 0){
	$addSongToGame = $gamesManager->addSongToGame($gameId, $songId);
	}
	else{

		exit();
	}

}

function removeSongFromGame($id,  $gameId, $songId){
	$gamesManager = new GamesManager();
	$checkGame = $gamesManager->checkGameId($id, $gameId);
	if ($checkGame > 0){
		$removeSongFromGame = $gamesManager->removeSongFromGame($gameId, $songId);
	}
	else{
		exit();
	}
}

function error($twig, $errorMessage){
	echo $twig->render('erreur.twig',  array('errorMessage' => $errorMessage));
}

function ingame($twig, $id, $gameId){
	$songsManager = new SongsManager();
	$gameSongs = $songsManager->getGameSongs($gameId);
	$video = new VideosManager();
	$videoWay = $video->getVideoWay($id);
	$gamesManager = new GamesManager();
	$blocNotes = $gamesManager->getGameNotes($gameId, $id);
	echo $twig->render('ingame.twig',  array('gameSongs' => $gameSongs, 'videos' => $videoWay, 'gameId' => $gameId, 'blocNotes' => $blocNotes));
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
