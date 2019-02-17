<?php

require_once('model/SongsManager.php');


function getFavSongs(){
	$songsManager = new SongsManager();
	$id = 1;
	$favSongsId = $songsManager->getFavSongsId($id);
	while ($favSongsId = $favSongsId->fetch()){
	$favSongs = $songsManager->getFavSongs($favSongsId);
	}
	return $favSongs;
}


function allSongs($twig, $userId){
	$songsManager = new SongsManager();
	$allSongs = $songsManager->getAllSongs();
	$favSongsId = $songsManager->getFavSongsId($userId);

	
	echo $twig->render('allsongs.twig', array('allSongs' => $allSongs, 'favSongs' => $favSongsId));
}


function checkSong($userId, $songId){
	$songsManager = new SongsManager();
	$checkSongs = $songsManager->checkFavSongs($userId, $songId);
	if($checkSongs['total'] > 0){
		return true;
	}
	else{
		return false;
	}
}

function addSong($userId, $songId){
	$songsManager = new SongsManager();
	$checkSongs = checkSong($userId, $songId);
	if($checkSongs == true){
		exit();
	}	
	else{
	$allSongs = $songsManager->addSongToFav($userId, $songId);	
	}
}

function removeSong($userId, $songId){
	$songsManager = new SongsManager();
	$checkSongs = checkSong($userId, $songId);
	if($checkSongs == false){
		exit();
	}	
	else{
	$allSongs = $songsManager->removeFavSong($userId, $songId);	
	}
}


