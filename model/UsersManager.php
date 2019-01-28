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

}