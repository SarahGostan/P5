<?php
Class UserSession{

public function __construct(){
	if(session_status() ==  PHP_SESSION_NONE)
	{
	session_start();
	}
}

		public function logout(){
			session_destroy();
		}


		public function isAuthenticated(){
			if (!isset($_SESSION['id']))
			{
			return false;
			}
			else{
				return true;
			}
		}

		public function getId()
		{

			if($this->isAuthenticated() == true){
				return $_SESSION['id'];
			}
			else{
				return null;
			}
		}


		public function login($id){
			$_SESSION['id'] = $id;
		}
		
	}
