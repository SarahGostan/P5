<?php
ob_start();
function allSongs($twig, $userId, $page, $keyword){
	$songsManager = new App\Model\SongsManager();
	$limit = 4;
	$firstElement = ($page - 1) * $limit;
	$pageNumber = $songsManager->pageNumber($limit);
	if ($keyword != '%'){
	$keyword = '%'.$keyword.'%';
	$pageNumber = 0;
}
	$allSongs = $songsManager->getAllSongs($firstElement, $limit, $keyword);
	$favSongs = $songsManager->getFavSongs($userId);
	$thematics = $songsManager->getThematics();
	$favSongsId = [];
	foreach($favSongs as $favSong){
	$favSongsId[] = $favSong['id'];
	}
	echo $twig->render('allsongs.twig', array('allSongs' => $allSongs, 'favSongs' => $favSongsId, 'thematics' => $thematics, 'pageNumber' => $pageNumber, 'page' => $page));
}

function songFavStatut($songId, $id){
	$songsManager = new App\Model\SongsManager();
	$checkSongs = $songsManager->checkFavSongs($id, $songId);
	if($checkSongs['total'] > 0){
		$result = 0;

	}
	else{
		$result = 1;

	}
	return $result;
}

function checkSong($userId, $songId){
	$songsManager = new App\Model\SongsManager();
	$checkSongs = $songsManager->checkFavSongs($userId, $songId);
	if($checkSongs['total'] > 0){
		return true;
	}
	else{
		return false;
	}
}

function addSong($userId, $songId){
	$songsManager = new App\Model\SongsManager();
	$checkSongs = checkSong($userId, $songId);
	if($checkSongs == true){
		exit();
	}
	else{
	$allSongs = $songsManager->addSongToFav($userId, $songId);
	}
}

function removeSong($userId, $songId){
	$songsManager = new App\Model\SongsManager();
	$checkSongs = checkSong($userId, $songId);
	if($checkSongs == false){
		exit();
	}
	else{
	$allSongs = $songsManager->removeFavSong($userId, $songId);
	}
}

function searchSong($term){
	$songManager = new App\Model\SongsManager();
	$searchSong = $songManager->searchASong($term);
	return $searchSong;
}
