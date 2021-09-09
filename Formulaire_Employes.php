<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire_Employes</title>
</head>
<body>
	<label for="FormName"> Nom de Famille :</label><br>
		<input type="text" id="FormName" name="FormName"><br>
		<label for="FormFname">Prénom :</label><br>
		<input type="text" id="FormFname" name="FormFname"><br>
		<label for="ForMail"> Email :</label><br>
		<input type="email" id="ForMail" name="ForMail"><br>
		<label for="FormVille"> Ville :</label><br>
		<input type="text" id="FormVille" name="FormVille"><br>
		<label for="FormCp">Code Postal :</label><br>
		<input type="number" id="FormCp" name="FromCp" min="01000" max="99999"><br>
		<label for="FormAdresse">Adresse :</label><br>
		<input type="text" id="FormAdresse" name="FormAdresse"><br>
		<label for="Password">Choisis ton Mot de Passe :<label><br>
		<input type="password" id="Password" name="Password"><br>
		<label for="Vpassword">Verifis ton Mot de Passe :</label><br>
		<input type="password" id="Vpassword" name="Vpassword"><br>
		<label for="NoSecu">Numero Securité Sociale :</label><br>
		<input type="text" id="NoSecu" name="NoSecu"><br>
		<label for="Salaire">Salaire :</label><br>
		<input type="number" id="Salaire" name="Salaire" min="950" max="14000" ><br>
		<label for="Fonction"> Poste : </label><br>
		<input type="text" id="Fonction" name="Fonction"><br>
		<label for="Superieur">Responsable :</label><br>
		<input type="text" id="Superieur" name="Superieur"><br>
		<label>Enregistrer</label>
		<input type="submit" name="submit">

</body>
</html>