<?php

require_once('model/GamesManager.php');
require_once('model/SongsManager.php');

function getGamesInfos($twig, $id){
	$gamesManager = new GamesManager();
	$gamesInfos = $gamesManager->getGamesInfos($id);
	$songsManager = new SongsManager();
	$favSongs = $songsManager->getFavSongs($id);

	echo $twig->render('parties_gestionnaire.twig', array('gamesInfos' => $gamesInfos, 'favSongs' => $favSongs));
}


function ingame($twig, $id, $gameId){
	$songsManager = new SongsManager();
	$gameSongs = $songsManager->getGameSongs($gameId);
	$video = new VideosManager();
	$videoWay = $video->getVideoWay($gameId);
	$gamesManager = new GamesManager();
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
	$gamesManager = new GamesManager();
	$gamesInfos = $gamesManager->checkGameOwner($id, $gameId);
	if($gamesInfos == true){
	$video = new VideosManager();
	$newVideo = $video->addNewVideo($link, $gameId, $id);
	header('Location: http://localhost/appliJDR/index?action=ingame&id=' . $gameId);
}
	else{
		throw new Exception('Echec du jet de piratage. Cette partie ne vous appartient pas.');
	}
}


function removeVideo($link, $gameId, $videoId, $id){
	$gamesManager = new GamesManager();
	$gamesInfos = $gamesManager->checkGameOwner($id, $gameId);
	if($gamesInfos == true)
	{
		$video = new VideosManager();
		$removeVideo = $video->removeVideoLink($link, $gameId, $videoId);
		header('Location: http://localhost/appliJDR/index?action=ingame&id=' . $gameId);
	}
	else
	{
		throw new Exception('Echec du jet de piratage. Cette partie ne vous appartient pas.');
	}
}

function newGame($id, $gameName){
	$gamesManager = new GamesManager();
	$newGame = $gamesManager->newGame($id, $gameName);
	$newGameNotes = $gamesManager->newNotes($id, $newGame);
	header('Location: ?action=ingame&id=' . $newGame);
}

function supressGame($gameId, $id){
	$gamesManager = new GamesManager();
	$checkGame = $gamesManager->checkGameId($id, $gameId);
	if ($checkGame['total'] > 0){
		$supressGame = $gamesManager->supressGame($id, $gameId);
		$supressGameSongs = $gamesManager->supressGameSongs($gameId);
		header('Location: ?action=jouer');
	}
	else{
		throw new Exception('Jet de discrétion échoué. Vous avez été repéré en train de tenter de supprimer la partie d\'un autre.');
	}
}

function 	notesEdit($post_id, $title, $content, $owner_id){
	$gamesManager = new GamesManager();
	$checkNote = $gamesManager->checkNoteId($owner_id, $post_id);
	if ($checkNote['total'] > 0){
		$editNotes = $gamesManager->editeNotes($title, $content, $post_id);
}
}
