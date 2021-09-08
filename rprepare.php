
<?php
require "PDOconfig.PHP" ;
require "Formulaire_Client.php";
if ($_POST['Password'] === $_POST['Vpassword']) {

try {
$CryptedPW = crypt($_POST['Password']);
$date = date('Y-m-d H:i:s');
$bdd = new PDO("mysql:host=$host;dbname=$base;port=$port", $user , $password );
$bdd->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
var_dump($bdd);
$Chaipas = $bdd->prepare(
	"INSERT INTO client (Nom, Prenom,Mail, Adresse, CodePostal,Ville, Birth_Date, Password, Date_creation_compte) VALUES (:Nom, :Prenom, :Mail, :Adresse, :CodePostal, :Ville, :Birth_Date, :Password, :Date_creation_compte )");

$Chaipas->bindValue(':Nom', $_POST['FormName']);
$Chaipas->bindValue(':Prenom', $_POST['FormFname']);
$Chaipas->bindValue(':Mail', $_POST['ForMail']);
$Chaipas->bindValue(':Adresse', $_POST['FormAdresse']);
$Chaipas->bindValue(':CodePostal', $_POST['FormCp']);
$Chaipas->bindValue(':Ville', $_POST['FormVille']);
$Chaipas->bindValue(':Birth_Date', $_POST['Bith_Date']);
$Chaipas->bindValue(':Password', $CryptedPW);
$Chaipas->bindValue(':Date_creation_compte', $date );

$Chaipas->execute();

$date = null;
$bdd = null;
}
catch (Exception $e) {
  echo "ERREUR : ".$e->getMessage() ;
}
}
print($_POST['ForMail']) ;
print('hello word');

