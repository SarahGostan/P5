<?php



function allSongs($twig, $userId, $page){
	$songsManager = new App\Model\SongsManager();
	$limit = 4;
	$firstElement = ($page - 1) * $limit;
	$allSongs = $songsManager->getAllSongs($firstElement, $limit);
	$pageNumber = $songsManager->pageNumber($limit);
	$favSongs = $songsManager->getFavSongs($userId);
	$thematics = $songsManager->getThematics();
	$favSongsId = [];
	foreach($favSongs as $favSong){
	$favSongsId[] = $favSong['id'];
	}
	echo $twig->render('allsongs.twig', array('allSongs' => $allSongs, 'favSongs' => $favSongsId, 'thematics' => $thematics, 'pageNumber' => $pageNumber, 'page' => $page));
}

function getSongsByKeyWord($twig, $keyword){
	$songsManager = new App\Model\SongsManager();
	$allSongs = $songsManager->getSongsByKeyWord($keyword);
	echo $twig->render('songsbykeyword.twig', array('allSongs' => $allSongs, 'keyword' => $keyword));
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
	$searchSong = $songManager->searchSong($term);
	return $searchSong;

}
