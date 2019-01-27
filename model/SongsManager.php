<?php

require_once("Manager.php");

class SongsManager extends Manager{
	
	public function getFavSongsId($userId){
		$query = $this->db->prepare('SELECT s.name, s.access, us.user_id
					FROM songs as s
					INNER JOIN users_songs us
					ON s.id = us.song_id
					AND us.user_id = ?');
		$query->execute(array($userId));
		$favSongsId = $query->fetchAll();
		
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