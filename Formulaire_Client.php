


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">  
	<title>Formulaire_Client</title>
</head>
<body>
	<form action="rprepare.php" method="post">
	<label for="FormName"> Nom de Famille :</label><br>
		<input type="text" key="FormName" name="FormName"><br>
		<label for="FormFname">Prénom :</label><br>
		<input type="text" key="FormFname" name="FormFname"><br>
		<label for="ForMail"> Email :</label><br>
		<input type="email" key="ForMail" name="ForMail"><br>
		<label for="FormVille"> Ville :</label><br>
		<input type="text" key="FormVille" name="FormVille"><br>
		<label for="FormCp">Code Postal :</label><br>
		<input type="number" key="FormCp" name="FormCp" min="01000" max="99999"><br>
		<label for="FormAdresse">Adresse :</label><br>
		<input type="text" key="FormAdresse" name="FormAdresse"><br>
		<label for="Bith_Date">Date de Naissance :</label><br>
		<input type="Date" key="Bith_Date" name="Bith_Date"><br>
		<label for="Password">Choisis ton Mot de Passe :</label><br>
		<input type="password" key="Password" name="Password"><br>
		<label for="Vpassword">Verifis ton Mot de Passe :</label><br>
		<input type="password" key="Vpassword" name="Vpassword"><br>
		<label>Enregistrer</label>
		<input type="submit" name="submit">
	</form>
</body>
</html>