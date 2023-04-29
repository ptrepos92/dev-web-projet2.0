<?php
session_start();
?>


<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Brico & co</title>

<style>

#menu-demo,ul{list-style-type: none;margin:0;padding:0;}

#menu-demo>li{display: inline-block;border:1px solid #2D9988 ;border-radius:10px 10px 0 0;}

#menu-demo li{width: 110px;position: relative;}

#menu-demo li:hover{background: #2D9988;}

#menu-demo a{text-decoration:none;display:block;padding:10px;color:black;}

#menu-demo>li>ul{position: absolute;left:-1000px;background: #2D9988;border: 1px solid blue;}

#menu-demo>li:hover>ul{top: 100%;left: 0;}

#menu-demo a:hover{text-decoration:underline;color:white;}

#menu-demo>li li:hover{background:blue;}

img{
height: 30%;
width: 10%;
}




</style>

</head>

<body>


<form action="/search-results.html" method="get">
  <label for="search">Rechercher :</label>
  <input type="text" id="search" name="q">
  <button type="submit">Rechercher</button>
</form>

            

<img src="/cergy/homee/l/lavertonag/LOGO.png" alt="prbleme" >
<br>

<br>

<ul id="menu-demo">

<li><a>Salon</a>

<ul> <li> <a href="etageres.php"> Etagères </a></li>

<li><a href="tablebasse.php">Table basse </a></li>

<li><a href="portementeau.php"> Porte menteau</a></li>

<li><a href="biblio.php"> Bibliothéque </a></li>

</ul>

</li>

<li><a>Jardin</a>

<ul> <li> <a href="balancoire.php"> Balancoire </a></li>

<li><a href="tablejardin.php">Table de jardin </a></li>

<li><a href="fauteuil.php">Fauteuil</a></li>

<li><a href="cabane.php"> Cabane pour enfants </a></li>

<li><a href="niche.php"> Niche </a></li>

</ul>

</li>

<li><a>Chambre</a>

<ul> <li> <a href="tabledechevet.php"> Table de chevet</a></li>

<li><a href="penderie.php"> Penderie </a></li>

<li><a href="bureau.php"> Bureau </a></li>

</ul>

</li>

<li><a>Cuisine</a>

<ul> <li> <a href="etagereflottantes.php"> Etagere flottantes</a></li>

<li><a href="table.php"> Table </a></li>

<li><a href="bar.php"> Bar </a></li>

</ul>

</li>

<br>

<div class="user-widget">

  <?php if( isset($_SESSION['email']) && $_SESSION['email'] == "popo@gmail.com" ) : ?>
    <a href="/profil-admin.php">Mon profil</a>

  <?php elseif( isset($_SESSION['username']) && $_SESSION['username'] !== null ) : ?>
    <a href="/profil.php">Mon profil</a>
  <?php else : ?>
    <a href="/connexion.php">Se connecter</a>
  <?php endif; ?>
</div>

</body>

</html>
