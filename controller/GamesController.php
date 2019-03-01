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

function newGame($id, $gameName){
	$gamesManager = new GamesManager();
	$newGame = $gamesManager->newGame($id, $gameName);
	header('Location: ?action=ingame&id=' . $newGame);

}

function supressGame($gameId, $id){
	$gamesManager = new GamesManager();
	$checkGame = $gamesManager->checkGameId($id, $gameId);
	if ($checkGame['total'] > 0){
		$supressGame = $gamesManager->supressGame($id, $gameId);
		header('Location: ?action=jouer');
	}
	else{
		throw new Exception('Jet de discrétion échoué. Vous avez été repéré en train de tenter de supprimer la partie d\'un autre.');
	}
}
