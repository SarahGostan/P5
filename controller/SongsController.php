<?php

require_once('model/SongsManager.php');





function allSongs($twig, $userId){
	$songsManager = new SongsManager();
	$allSongs = $songsManager->getAllSongs();
	$favSongs = $songsManager->getFavSongs($userId);
	$favSongsId = [];
	foreach($favSongs as $favSong){
	$favSongsId[] = $favSong['id'];
	}

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

function searchSong(){

}
