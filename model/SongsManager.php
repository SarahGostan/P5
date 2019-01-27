<?php

require_once("Manager.php");

class SongsManager extends Manager{
	
	public function getFavSongsId($userId){
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT song_id FROM users_songs WHERE user_id = ?');
		$req->execute(array($userId));
		$favSongsId = $req->fetchAll();
		return $favSongsId;
	}
	
	public function getFavSongs($favSongs){
		$db = $this->dbConnect();
	$req = $db->query('SELECT song_id FROM users_songs WHERE user_id = 1');
	while ($favsongs = $req->fetch()){
		echo($favsongs['song_id']);
		$fav = $bdd->prepare('SELECT name FROM songs WHERE id = ?');
		$fav->execute(array($favsongs['song_id']));
		while($favSongsName = $fav->fetch()){
			return $favSongsName;
		}
	}

	} 
	
}