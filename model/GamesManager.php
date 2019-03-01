<?php

require_once("Manager.php");


class GamesManager extends Manager{

	public function newGame($id, $gameName){
		$req = $this->db->prepare('INSERT INTO games(name, owner_id) VALUES(:gameName, :id)');
		$req->execute(array(
		'gameName' => $gameName,
		'id' => $id,
		));
		$req = $this->db->lastInsertId();
		return $req;
	}


	public function getGamesInfos($userId){
			$query = $this->db->prepare('SELECT name, game_id FROM games WHERE owner_id = ?');
			$query->execute(array($userId));
			$gamesInfos = $query->fetchAll();
			return $gamesInfos;
	}

	public function getGameNotes($gameId, $userId){
			$query = $this->db->prepare('SELECT chapter, title, content FROM game_notes WHERE owner_id = :userId AND game_id = :gameId');
			$query->execute(array(
			'userId' => $userId,
			'gameId' => $gameId,
			));
			$gameNotes = $query->fetchAll();
			return $gameNotes;
	}

	public function getGamesSounds($gameId){
			$query = $this->db->prepare('SELECT song_id FROM games WHERE game_id = ?');
			$query->execute(array($gameId));
			$gameSounds = $query->fetchAll();
			return $gamesSounds;
	}

	public function addSongToGame($gameId, $songId){
		$req = $this->db->prepare('INSERT INTO game_songs(game_id, song_id) VALUES(:gameId, :songId)');
		$req->execute(array(
		'gameId' => $gameId,
		'songId' => $songId
		));
	}

	public function removeSongFromGame($gameId, $songId){
		$req = $this->db->prepare('DELETE FROM game_songs WHERE game_id = :gameId AND song_id = :songId');
		$req->execute(array(
		'gameId' => $gameId,
		'songId' => $songId
		));
	}

	public function supressGame($id, $gameId){
		$req = $this->db->prepare('DELETE FROM games WHERE game_id = :gameId AND owner_id = :id');
		$req->execute(array(
		'gameId' => $gameId,
		'id' => $id
		));
	}

	public function checkGameId($id, $gameId){
		$req = $this->db->prepare('SELECT COUNT(*) AS total FROM games WHERE game_id = :gameId AND owner_id = :id');
		$req->execute(array(
		'gameId' => $gameId,
		'id' =>$id));
		$donnee = $req->fetchAll();
		$total = $donnee[0];
		return $total;
	}
}
