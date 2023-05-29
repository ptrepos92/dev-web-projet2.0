<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modifier le profil</title>
</head>
<body>
	<header>
		<h1>Modifier le profil</h1>
	</header>


	<a href="/accueil.php">Page Accueil</a>
	<main>
		<section>
			<h2>Informations personnelles</h2>
			
<form name="form" action="modification-profil.php" method="POST">
		
        <label for="password"> Mot de passe: </label>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">

        <label for="confirmationmotdepasse "> Confirmation mot de passe: </label>
        <input type="confirmationmotdepasse" name="confirmationmotdepasse" id="confirmationmotdepasse" placeholder="Entrez vore mot de passe">

        <div>
            <label for="Prenom "> Prenom: </label>
            <input type="prenom" name="prenom" id="prenom" placeholder="Entrez vore prénom">
        </div><br><br>
        <div>
            <label for="Nom "> Nom: </label>
            <input type="nom" name="nom" id="nom" placeholder="Entrez vore nom">
        </div><br><br>
        
		<div>
		<label>Date de naissance</label> <br>
		<input type="date" name="date"><br><br>
		</div><br><br>

		<input type="submit"  name="valider" value="Creation">
 
 </form>
		</section>
		
	</main>
	
</body>
</html>
