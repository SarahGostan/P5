<?php

require_once('model/SongsManager.php');


function accueil($twig){

	echo $twig->render('accueil.twig');
	
}

function ingame($twig){
	$songsManager = new SongsManager();
	$id = 1;
	$favSongsId = $songsManager->getFavSongsId($id);
	echo $twig->render('ingame.twig',  array('favSongs' => $favSongsId));
}

function getFavSongs(){
	$songsManager = new SongsManager();
	$id = 1;
	$favSongsId = $songsManager->getFavSongsId($id);
	while ($favSongsId = $favSongsId->fetch()){
	$favSongs = $songsManager->getFavSongs($favSongsId);
	}
	return $favSongs;
}
