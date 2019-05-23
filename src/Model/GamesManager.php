<?php

namespace App\Model;
class GamesManager extends Manager{

	public function newGame($id, $gameName){

			$req = $this->db->prepare('INSERT INTO games(name, owner_id) VALUES(:gameName, :id)');
			$req->execute(array(
			'gameName' => $gameName,
			'id' => $id,
			));
		$gameId = $this->db->lastInsertId();
		return $gameId;
	}

	public function changeImageGame($gameId, $img){
			$req = $this->db->prepare('UPDATE games SET icone = :img WHERE game_id = :gameId');
			$req->execute(array(
			'img' => $img,
			'gameId' => $gameId,
			));
	}

public function newNotes($id, $gameId){
	$chapter = 1;
	$req = $this->db->prepare('INSERT INTO game_notes(chapter, title, content, game_id, owner_id) VALUES (:chapter, :title, :content, :gameId, :id)');
	$req->execute(array(
		'chapter' => $chapter,
		'title' => 'Page ' . $chapter,
		'content' => 'Ecrivez ici vos notes de jeu',
		'gameId' => $gameId,
		'id' => $id,
	));
}

public function checkGameOwner($id, $game_id){
	$query = $this->db->prepare('SELECT owner_id FROM games WHERE game_id = ?');
	$query->execute(array($game_id));
	$gamesOwner = $query->fetchAll();
	if(!isset($gamesOwner[0]))
	{
		return null;
	}
	else
	{
		$result = $gamesOwner[0];
		if ($result[0] == $id)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

public function getGameInfos($gameId){
	$query = $this->db->prepare('SELECT * FROM games WHERE game_id = ?');
	$query->execute(array($gameId));
	$gameInfos = $query->fetchAll();
	return $gameInfos;
}

	public function getGamesInfos($userId){
			$query = $this->db->prepare('SELECT * FROM games WHERE owner_id = ?');
			$query->execute(array($userId));
			$gamesInfos = $query->fetchAll();
			return $gamesInfos;
	}

	public function getGameNotes($gameId, $userId){
			$query = $this->db->prepare('SELECT chapter, title, content, id FROM game_notes WHERE owner_id = :userId AND game_id = :gameId');
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

	public function supressGameSongs($gameId){
		$req = $this->db->prepare('DELETE FROM game_songs WHERE game_id = :gameId');
		$req->execute(array(
		'gameId' => $gameId,
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

	public function checkNoteId($ownerId, $postId){
		$req = $this->db->prepare('SELECT COUNT(*) AS total FROM game_notes WHERE id = :postId AND owner_id = :ownerId');
		$req->execute(array(
		'postId' => $postId,
		'ownerId' =>$ownerId));
		$donnee = $req->fetchAll();
		$total = $donnee[0];
		return $total;
	}


	public function editeNotes($title, $content, $id){
		$req = $this->db->prepare('UPDATE game_notes SET title = :title, content = :content WHERE id = :id');
		$req->execute(array(
		'title' => $title,
		'content' =>$content,
		'id' => $id
	));
	}
}
