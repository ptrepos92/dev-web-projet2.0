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
				<li><strong>Nom :</strong> 

				<?php echo 'Name is ' . $_SESSION['username'] . '.<br>'; ?>
				</li>


				<li><strong>Date de naissance :</strong> <?php 
				echo 'Date is ' . $_SESSION['date'] . '.<br>'; ?></li>
				<li><strong>Email :</strong> <?php 
				echo 'email is ' . $_SESSION['email'] . '.<br>'; ?></li>
			</ul>
		</section>



		<a href="/deconnexion.php">Se deconnecter</a>
		<a href="/supprimer-compte.php">Supprimer mon compte</a>




		<section>
			<h2>Gestion du site</h2>
			<ul>
				<li><a href="ajout-recette.php">Ajout de recettes</a>
				</li>

				<li><a href="commentaires.php">Commentaires</a></li>
			</ul>
		</section>
		
	</main>
	
</body>
</html>

