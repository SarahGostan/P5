<?php

require_once("Manager.php");


class VideosManager extends Manager{
	
	public function getVideoWay($id){
		$req = $this->db->prepare('SELECT video_link FROM users_videos WHERE user_id = ?');
		$req->execute(array($id));
		$donnee = $req->fetchAll();
		return $donnee;
	}
	
	public function addVideoLink($link, $id){
		$req = $this->db->prepare('INSERT INTO users_videos(user_id, video_link) VALUES(:id, :link)');
		$req->execute(array(
		'id' => $id,
		'link' => $link
		));
	}
	
	public function removeVideoLink($link, $id){
		$req = $this->db->prepare('DELETE FROM users_videos WHERE user_id = :id AND video_link = :link');
		$req->execute(array(
		'id' => $id,
		'link' => $link
		));
	}
	
	
	
	
	
	
}
	