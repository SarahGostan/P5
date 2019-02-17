<?php

require_once("Manager.php");


class VideosManager extends Manager{
	
	public function getVideoWay($id){
		$req = $this->db->prepare('SELECT video_link FROM users_videos WHERE user_id = ?');
		$req->execute(array($id));
		$donnee = $req->fetchAll();
		return $donnee;
	}
}
	