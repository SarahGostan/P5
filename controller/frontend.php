<?php

require_once('model/SongsManager.php');

function accueil($twig){

	echo $twig->render('accueil.twig');
	
}

function error($twig, $errorMessage){
	echo $twig->render('erreur.twig',  array('errorMessage' => $errorMessage));
}

function ingame($twig, $id){
	$songsManager = new SongsManager();
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


function allSongs($twig){
	$songsManager = new SongsManager();
	$allSongs = $songsManager->getAllSongs();
	echo $twig->render('allsongs.twig', array('allSongs' => $allSongs));
}

function addSong($userId, $songId){
	$songsManager = new SongsManager();
	$allSongs = $songsManager->addSongToFav($userId, $songId);
}

