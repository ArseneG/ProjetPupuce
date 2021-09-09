
<?php
require "PDOconfig.PHP" ;
require "Formulaire_Client.php";
require "Autoloader.php";
Autoloader::register();
if ($_POST['Password'] === $_POST['Vpassword'] AND !empty('Password') AND strlen($_POST['Password']) >= 8) {
	$date = date('Y-m-d H:i:s');
	$CryptedPW = password_hash($_POST['Password'],PASSWORD_DEFAULT); 
	$CompteClient = new Client($_POST['FormName'],$_POST['FormFname'],$_POST['ForMail'], $_POST['FormAdresse'], $_POST['FormCp'], $_POST['FormVille'], $_POST['Bith_Date'], $date, $CryptedPW );
	var_dump($CompteClient);
	try {
		$bdd = new PDO("mysql:host=$host;dbname=$base;port=$port", $user , $password );
		$bdd->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
		var_dump($bdd);
		$Chaipas = $bdd->prepare(
				"INSERT INTO client (Nom, Prenom,Mail, Adresse, CodePostal,Ville, Birth_Date, Password, Date_creation_compte) VALUES (:Nom, :Prenom, :Mail, :Adresse, :CodePostal, :Ville, :Birth_Date, :Password, :Date_creation_compte )");

$Chaipas->bindValue(':Nom', $CompteClient->Nom);
$Chaipas->bindValue(':Prenom', $CompteClient->Prenom);
$Chaipas->bindValue(':Mail', $CompteClient->Mail);
$Chaipas->bindValue(':Adresse', $CompteClient->Adresse);
$Chaipas->bindValue(':CodePostal', $CompteClient->Cp);
$Chaipas->bindValue(':Ville', $CompteClient->Ville);
$Chaipas->bindValue(':Birth_Date', $CompteClient->DateDeNaissance);
$Chaipas->bindValue(':Password', $CompteClient->Password);
$Chaipas->bindValue(':Date_creation_compte', $CompteClient->DateDeCréationDeCompte );

$Chaipas->execute();
$CryptedPW = null;
$date = null;
$bdd = null;
}
catch (Exception $e) {
  echo "ERREUR : ".$e->getMessage() ;
}
}
else {
	echo 'mot de passe non valide';
} 


