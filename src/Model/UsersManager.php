<?php
namespace App\Model;
class UsersManager extends Manager{

	public function login($mail, $password){
		$req = $this->db->prepare('SELECT id, password FROM users WHERE mail = :mail');
		$req->execute(array(
		'mail' => $mail));
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

	public function signUp($password, $mail, $key){
		$req = $this->db->prepare('INSERT INTO users(password, mail, statut, activation_key) VALUES(:password, :mail, :statut, :key)');
		$req->execute(array(
						'password' => password_hash($password, PASSWORD_DEFAULT),
						'mail' => $mail,
						'statut' => 0,
						'key' =>$key,
						));
	}

	public function checkUserKey($mail, $key){
			$req = $this->db->exec('SELECT ');

	}


	public function validUser($pseudo, $key){
		$req = $this->db->prepare('UPDATE users SET statut = 1 WHERE mail = :mail AND activation_key = :key AND statut = 0');
		$req->execute(array(
			'mail' => $mail,
			'key' => $key
			));
		$result = $req->rowCount();
		return $result;
	}


	public function checkPassword($id, $actualPass, $newPass){
		$req = $this->db->prepare('SELECT password FROM users WHERE id = :id');
		$req->execute(array(
		'id' => $id));
		$result = $req->fetch();
		$passwordTry = password_verify($actualPass, $result['password']);
		if (!$passwordTry){
			$result = false;
			return $result;
		}
		else{
			$result = true;
			return $result;
		}
	}


	public function checkMail($mail){
		$req = $this->db->prepare('SELECT COUNT(*) AS checkmail FROM users WHERE mail = :mail');
		$req->execute(array(
		'mail' =>$mail));
		$donnee = $req->fetchAll();
		$checkMail = $donnee[0];
		return $checkMail;

	}

	public function changeKey($mail, $key){
		$req = $this->db->prepare('UPDATE users SET activation_key = :key WHERE mail = :mail');
		$req->execute(array(
		'key' =>$key,
		'mail' =>$mail));
	}

	public function selectId($mail){
		$req = $this->db->prepare('SELECT id FROM users WHERE mail = :mail');
		$req->execute(array(
		'mail' => $mail));
		$donnee = $req->fetchAll();
		$id = $donnee[0];
		return $id;
	}
}
