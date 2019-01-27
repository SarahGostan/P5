<?php
$bdd = new PDO('mysql:host=localhost;dbname=applijdr;charset=utf8', 'root', '');
$req = $db->query('SELECT song_id FROM users_songs WHERE user_id = 1');
while ($favsongs = $req->fetch()){
	echo($donnees['id']);
}