<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil de l'utilisateur</title>
</head>
<body>
	<header>
		<h1>Profil de l'utilisateur</h1>
	</header>


	<a href="/accueil.php">Page Accueil</a>
	<main>
		<section>
			<h2>Informations personnelles</h2>
			<ul>
				<li><strong>Prenom :</strong> 
				<?php echo 'Name is ' . $_SESSION['prenom'] . '.<br>'; ?>
				</li>
				<li><strong>Nom :</strong> 
				<?php echo 'Name is ' . $_SESSION['nom'] . '.<br>'; ?>
				</li>

				<li><strong>Date de naissance :</strong> <?php 
				echo 'Date is ' . $_SESSION['date'] . '.<br>'; ?></li>
				<li><strong>Email :</strong> <?php 
				echo 'email is ' . $_SESSION['email'] . '.<br>'; ?></li>
			</ul>
		</section>

		<a href="/deconnexion.php">Se deconnecter</a>
		<a href="/supprimer-compte.php">Supprimer mon compte</a>
		<a href="/modif.php">Modifier mon profil</a>
		<br> <br> <br>
		<a href="envoie-recette.php">Envoyer une recette a l'administrateur   </a>
		<br>
		<a href="notifications.php">  Notifications</a>
		
	</main>
	
</body>
</html>

