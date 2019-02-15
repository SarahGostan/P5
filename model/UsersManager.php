<?php

require_once("Manager.php");

class UsersManager extends Manager{
	
	public function login($pseudo, $password){
		$req = $this->db->prepare('SELECT id, pseudo, password FROM users WHERE pseudo = :pseudo');
		$req->execute(array(
		'pseudo' => $pseudo));
		$result = $req->fetch();
		 $passwordTry = password_verify($password, $result['password']);
		if (!$passwordTry){
			$result = false;
			return $result;
		}
		else{
			return $result;
		} 
	}
	
	public function signUp($pseudo, $password, $mail, $key){
		$req = $this->db->prepare('INSERT INTO users(pseudo, password, mail, statut, activation_key) VALUES(:pseudo, :password, :mail, :statut, :key)');
		$req->execute(array(
						'pseudo' => $pseudo,
						'password' => password_hash($password, PASSWORD_DEFAULT),
						'mail' => $mail,
						'statut' => 0,
						'key' =>$key,
						));				
	}
	
	public function checkUserKey($pseudo, $key){
			$req = $this->db->exec('SELECT ');
		
	}
		
		
	public function validUser($pseudo, $key){
		$req = $this->db->prepare('UPDATE users SET statut = 1 WHERE pseudo = :pseudo AND activation_key = :key AND statut = 0');
		$req->execute(array(
			'pseudo' => $pseudo,
			'key' => $key
			));
		$result = $req->rowCount();
		return $result;
	}
}