<?php
require 'Autoloader.php'
function CréationCompteClient(){
	try{
	$bdd = new PDO("mysql:host=$host;dbname=$base;port=$port", $user , $password );
$bdd->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
var_dump($bdd);
$CompteClient = $bdd->prepare('SELECT * FROM client');
$CompteClient->setFetchMode(PDO::FETCH_CLASS, 'Client');
$CompteClient->execute();
$Client = $CompteClient->fetch();

$bdd = null;
}
atch (Exception $e) {
  echo "ERREUR : ".$e->getMessage() ;
}