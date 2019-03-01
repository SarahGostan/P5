<?php

require_once("Manager.php");


class SongsManager extends Manager{
	
	public function getFavSongs($userId){
		$query = $this->db->prepare('SELECT s.name, s.access, us.user_id, s.id
					FROM songs as s
					INNER JOIN users_songs us
					ON s.id = us.song_id
					AND us.user_id = ?');
		$query->execute(array($userId));
		$favSongs = $query->fetchAll();
		
		return $favSongs;
	}
	
	
		public function getGameSongs($gameId){
		$query = $this->db->prepare('SELECT s.name, s.access, s.id, gs.game_id
					FROM songs as s
					INNER JOIN game_songs as gs
					ON s.id = gs.song_id
					AND gs.game_id = ?');
		$query->execute(array($gameId));
		$gameSongs = $query->fetchAll();
		return $gameSongs;
	}
	
	
	
	public function getAllSongs(){
		$req = $this->db->query('SELECT name,access,id
					FROM songs
					ORDER BY principal_theme');
		$allSongs = $req->fetchAll();
		return $allSongs;
	}
	
	
	
	public function checkFavSongs($userId, $songId){
	 	$req = $this->db->prepare('SELECT COUNT(*) AS total FROM users_songs WHERE user_id = ? AND song_id = ?');
		$req->execute(array($userId, $songId)); 
		$donnee = $req->fetchAll();
		$total = $donnee[0];
		return $total;
		
	}
	
	public function addSongToFav($userId, $songId){
	 
		$req = $this->db->prepare('INSERT INTO users_songs(user_id, song_id) VALUES(:userId, :songId)');
		$req->execute(array(
		'userId' => $userId,
		'songId' => $songId
		));
		
		}
		
			public function removeFavSong($userId, $songId){
	 
		$req = $this->db->prepare('DELETE FROM users_songs WHERE user_id = :userId AND song_id = :songId');
		$req->execute(array(
		'userId' => $userId,
		'songId' => $songId
		));
		
		}
		
		
		
	}
		