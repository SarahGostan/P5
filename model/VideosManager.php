<?php

require_once("Manager.php");


class VideosManager extends Manager{

	public function getVideoWay($id){
		$req = $this->db->prepare('SELECT video_link, id FROM game_videos WHERE game_id = ?');
		$req->execute(array($id));
		$donnee = $req->fetchAll();
		return $donnee;
	}

	public function addNewVideo($link, $id){
		$req = $this->db->prepare('INSERT INTO game_videos(game_id, video_link) VALUES(:id, :link)');
		$req->execute(array(
		'id' => $id,
		'link' => $link
		));
	}

	public function removeVideoLink($link, $gameId, $videoId){
		$req = $this->db->prepare('DELETE FROM game_videos WHERE id = :videoId AND game_id = :id AND video_link = :link');
		$req->execute(array(
		'id' => $gameId,
		'link' => $link,
		'videoId' => $videoId
		));
		var_dump($videoId);
	}






}
