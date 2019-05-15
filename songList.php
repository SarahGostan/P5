<?php

require_once("Manager.php");

$term = $_GET['term'];
    $req = $bdd->prepare('SELECT name FROM songs WHERE name LIKE :term');
    $req->execute(array($term => '%'.$term.'%'));
    $array = array();
    while($donnee = $req->fetch())
    {
      array_push($array, $donnee['name']);
    }
    echo json_encode($array);


?>
