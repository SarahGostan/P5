<?php



function getGamesInfos($twig, $id){
	$gamesManager = new App\Model\GamesManager();
	$gamesInfos = $gamesManager->getGamesInfos($id);
	$songsManager = new App\Model\SongsManager();
	$favSongs = $songsManager->getFavSongs($id);
	echo $twig->render('parties_gestionnaire.twig', array('gamesInfos' => $gamesInfos, 'favSongs' => $favSongs));
}


function ingame($twig, $id, $gameId){
	$songsManager = new App\Model\SongsManager();
	$gameSongs = $songsManager->getGameSongs($gameId);
	$video = new App\Model\VideosManager();
	$videoWay = $video->getVideoWay($gameId);
	$gamesManager = new App\Model\GamesManager();
	$blocNotes = $gamesManager->getGameNotes($gameId, $id);
	$gameOwner = $gamesManager->checkGameOwner($id, $gameId);
	$gameInfos = $gamesManager->getGameInfos($gameId);

	if(is_null($gameOwner))
	{
		throw new Exception('Cette partie n\'existe pas');
	}
	else{
	echo $twig->render('ingame.twig',  array(
	'gameSongs' => $gameSongs,
	'videos' => $videoWay,
	'gameId' => $gameId,
	'blocNotes' => $blocNotes,
	'gamesInfos' =>$gameOwner,
	'sessionId' => $id,
	'gameInfos' => $gameInfos
));
}
}


function addNewVideo($link, $gameId, $id){
	$gamesManager = new App\Model\GamesManager();
	$gamesInfos = $gamesManager->checkGameOwner($id, $gameId);
	if($gamesInfos == true){
	$video = new App\Model\VideosManager();
	$newVideo = $video->addNewVideo($link, $gameId, $id);
	header('Location: http://localhost/appliJDR/index?action=ingame&id=' . $gameId);
}
	else{
		throw new Exception('Echec du jet de piratage. Cette partie ne vous appartient pas.');
	}
}

function addSongToGame($id, $gameId, $songId){
	$gamesManager = new App\Model\GamesManager();
	$gamesInfos = $gamesManager->checkGameOwner($id, $gameId);
	if($gamesInfos == true){
		$gameAddSong = new App\Model\GamesManager();
		$gameAddSong->addSongToGame($gameId, $songId);
	}
	else{
		throw new Exception('Cette partie ne vous appartient pas, vous ne pouvez pas la modifier');
	}
}

function removeSongFromGame($id, $gameId, $songId){
	$gamesManager = new App\Model\GamesManager();
	$gamesInfos = $gamesManager->checkGameOwner($id, $gameId);
	if($gamesInfos == true){
		$gameAddSong = new App\Model\GamesManager();
		$gameAddSong-> removeSongFromGame($gameId, $songId);
	}
	else{
		throw new Exception('Cette partie ne vous appartient pas, vous ne pouvez pas la modifier');
	}
}

function removeVideo($link, $gameId, $videoId, $id){
	$gamesManager = new App\Model\GamesManager();
	$gamesInfos = $gamesManager->checkGameOwner($id, $gameId);
	if($gamesInfos == true)
	{
		$video = new App\Model\VideosManager();
		$removeVideo = $video->removeVideoLink($link, $gameId, $videoId);
		header('Location: http://localhost/appliJDR/index?action=ingame&id=' . $gameId);
	}
	else
	{
		throw new Exception('Echec du jet de furtivité. Cette partie ne vous appartient pas.');
	}
}

function newGame($id, $gameName, $image){
	$gamesManager = new App\Model\GamesManager();
	$newGame = $gamesManager->newGame($id, $gameName);
	$newGameNotes = $gamesManager->newNotes($id, $newGame);
	if($image != false){
	$imageWay = "public/icones/users/icone" . $newGame;
	$result = move_uploaded_file($image['tmp_name'], $imageWay);
	$gamesManager->changeImageGame($newGame, $imageWay);
}
	header('Location: ?action=ingame&id=' . $newGame);
}

function supressGame($gameId, $id){
	$gamesManager = new App\Model\GamesManager();
	$checkGame = $gamesManager->checkGameId($id, $gameId);
	if ($checkGame['total'] > 0){
		$icone = "public/icones/users/icone" . $gameId;
		if(file_exists($icone)){
			unlink($icone);
		}
		$gamesManager->supressGame($id, $gameId);
		$gamesManager->supressGameSongs($gameId);
		header('Location: ?action=jouer');
	}
	else{
		throw new Exception('Jet de discrétion échoué. Vous avez été repéré en train de tenter de supprimer la partie d\'un autre.');
	}
}

function 	notesEdit($post_id, $title, $content, $owner_id){
	$gamesManager = new App\Model\GamesManager();
	$checkNote = $gamesManager->checkNoteId($owner_id, $post_id);
	if ($checkNote['total'] > 0){
		$editNotes = $gamesManager->editeNotes($title, $content, $post_id);
}
}
