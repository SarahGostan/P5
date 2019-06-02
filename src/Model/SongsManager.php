<?php
namespace App\Model;
ob_start();
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

	public function getThematics(){
			$req = $this->db->query('SELECT name, id FROM thematics ORDER BY id');
			$themes = $req->fetchAll();
			return $themes;
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

	public function searchSong($term){
			$req = $this->db->prepare('SELECT name, access, id FROM songs WHERE name LIKE :term');
			$req->execute(array('term' => '%'.$term.'%'));
			$array = array();
			while($donnee = $req->fetch())
			{
				array_push($array, array('value' => $donnee['name'],
					'label' => $donnee['name'],
					'desc' => $donnee['access'],
					'id' => $donnee['id']
				));
			}

			$result = json_encode($array);
			return $result;
	}

	public function searchASong($term){
			$req = $this->db->prepare('SELECT name, access, id FROM songs WHERE name LIKE :term');
			$req->execute(array('term' => '%'.$term.'%'));
			$array = array();
			while($donnee = $req->fetch())
			{
			array_push($array, array('value' => $donnee['name'],
					'label' => $donnee['name'],
					'desc' => $donnee['access'],
					'id' => $donnee['id']
				));
			}
			$result = json_encode($array);
			return $result;
	}

	public function getAllSongs($firstElement, $limit, $keyword){
		$req = $this->db->prepare(
			'SELECT SQL_CALC_FOUND_ROWS
			s.name AS song_name,
			s.id AS song_id,
			s.access AS song_access,
			s.principal_theme AS song_principal_theme,
			t.id AS thematic_id,
			t.name AS thematic_name
			FROM songs s
			INNER JOIN thematics t
			ON s.principal_theme = t.id
			WHERE (t.name LIKE :keyword)
			OR (s.name LIKE :keyword)
			OR (s.keyword LIKE :keyword)
			ORDER BY s.principal_theme
			LIMIT :firstElement, :limite');
		$req->bindParam(':firstElement', $firstElement, \PDO::PARAM_INT);
		$req->bindParam(':limite', $limit, \PDO::PARAM_INT);
		$req->bindParam('keyword', $keyword);
		$req->execute();
		$allSongs = $req->fetchAll();
		return $allSongs;
	}


	public function pageNumber($limit){
	$req = $this->db->query('SELECT COUNT(*) AS song_number FROM songs');
	while ($songsNumber = $req->fetch()){
		$songsNumber = $songsNumber['song_number'];
		$page_number = ceil($songsNumber/$limit);
	return $page_number;
	}
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
