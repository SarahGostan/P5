<?php


class Manager
{
	protected $db = null;
	public function __construct()
	{
		try
		{
	$host_name = 'db775522208.hosting-data.io';
	$database = 'db775522208';
	$user_name = 'dbo775522208';
 	$password = 'LEdMP$013Mel';
	$dns = 'mysql:host='.$host_name .';dbname='.$database.';charset=utf8';
//	$this->db = new PDO($dns, $user_name, $password);
		$this->db = new PDO('mysql:host=localhost;dbname=projetjdr;charset=utf8','root', '');
		}
		catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	}
}

// fonctions de récupération et d'insertion
