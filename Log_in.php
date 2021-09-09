<?php
require 'PDOconfig.PHP';

if(!empty($_POST['ForMail']) AND !empty($_POST['Password'])){
		$bdd = new PDO("mysql:host=$host;dbname=$base;port=$port", $user , $password );
		$bdd->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
		$Getlogs = $bdd->prepare('SELECT Mail, Password FROM client WHERE Mail = :Mail');
		$Getlogs->bindValue(':Mail', $_POST['ForMail']);
		$Getlogs->execute();
		$data = $Getlogs->fetch();
		If(password_verify($_POST['Password'],$data['Password'])){
		print('success');
		}
		else{
		echo 'wrong password';
	}
}
else{
        echo 'un effort stp ';
    }