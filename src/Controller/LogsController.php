<?php
require_once('src/Others/UserSession.php');

function login($twig, $message){
	if($message == 'fail'){
		$message="Echec de la connexion";
	}
	echo $twig->render('login.twig', array('message' => $message));
}

function inscription($twig){
	echo $twig->render('inscription.twig');
}

function logout($twig){
	$userSession = new UserSession();
	$userSession = $userSession->logout();
	echo $twig->render('login.twig');
}

function authenticize($mail, $password, $twig ){
	$adminManager = new App\Model\UsersManager();
	$login = $adminManager->login($mail, $password);
	if ($login == false){
		$message = "Echec de l'authentification";
		echo $twig->render('login.twig', array('message' => $message));
	}
	else {
		$sessionCreate = new UserSession();
		$sessionCreate->login($login['id']);
		echo $twig->render('accueil.twig');
		exit();
 	}
}

function checkAuth(){
	$userSession = new UserSession();
	$checkAuth = $userSession->isAuthenticated();
	if ($checkAuth == true){
		return $_SESSION['id'];
	}
}

	function signup($password, $mail, $message, $twig){

	$key = md5(microtime(TRUE)*100000);
	$userSignUp= new App\Model\UsersManager();
	$checkMail = $userSignUp->checkMail($mail);
	if($checkMail['checkmail'] > 0){
		throw new Exception ('Cet email est déjà enregistré.<br /><a href="index?action=inscription">Connectez vous</a>');
	}
	else{
	$userSignUp = $userSignUp->signUp($password, $mail, $key);
	$content = 'Bienvenue sur l\'Ecran du MJ,

	Pour activer votre compte, veuillez cliquer sur le lien ci dessous
	ou copier/coller dans votre navigateur internet.

	localhost/appliJDR/index.php?action=validaccount&mail='.urlencode($mail).'&key='.urlencode($key).'

	---------------
	Ceci est un mail automatique, Merci de ne pas y répondre.';
	$sujet = 'Activation de votre compte';
	$entete = "From: inscription@lecrandumj.com" ;
	mail($mail, $sujet, $content, $entete);
	header('Location:?action=accueil&message=emailsent');
	exit();
	}
}

function validAccount($mail, $key){
	$checkAccount = new App\Model\UsersManager();
	$checkVal = $checkAccount->validUser($mail, $key);
	if($checkVal > 0){
		throw new Exception('Compte validé ! Vous pouvez désormais vous connecter.' . $checkVal);
	}
	else{
		throw new Exception('Une erreur est intervenue dans la validation du compte ' . $key . '. Le lien peut-être invalide, ou le compte a déjà été validé.' . $checkVal);
	}

}

function accountChangePassword($id, $actualPass, $newPass){
	$passwordManage = new App\Model\UsersManager();
	$passwordCheck = $passwordManage->checkPassword($id, $actualPass, $newPass);
	if($passwordCheck == true){
		header('Location:index.php');
	}
	else{
		header('location:index?action=account&message=fail');
	}
}


function sendPassword($mail){
	$newPassword = new App\Model\UsersManager();
	$checkMail = $newPassword->checkMail($mail);
	if($checkMail['checkmail'] > 0){
		$key = md5(microtime(TRUE)*100000);
		$newKey = $newPassword->changeKey($mail, $key);
		$id = $newPassword->selectId($mail);
		$sujet = 'Réinitialisation de votre mot de passe';
		$entete = "From: support@lecrandumj.com" ;
		$content =
		'Vous recevez ce mail car vous avez demandé la réinitialisation de votre mot de passe sur l\'Ecran du MJ.

		Si vous êtes à l\'origine de cette demande, cliquez sur ce lien pour recevoir un nouveau mot de passe, ou copiez le dans votre navigateur internet :

		localhost/appliJDR/index.php?action=changepassword&id='.($id['id']).'&key='.urlencode($key).'

		Si vous n\'avez pas demandé la réinitialisation de votre mot de passe, ignorez cet email.

---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

		//mail($mail, $sujet, $content, $entete);
		header('location:index?action=accueil&message=emailsent');

	}
	else {
		throw new Exception ('Email invalide');
	}
}
