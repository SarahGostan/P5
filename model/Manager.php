<?php


class Manager
{
	protected $db = null;
	public function __construct()
	{
		$this->db = new PDO('mysql:host=localhost;dbname=applijdr;charset=utf8', 'root', '');	
	}
}

// fonctions de récupération et d'insertion