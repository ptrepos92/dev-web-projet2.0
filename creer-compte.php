</body> 


<!DOCTYPE html>
</html> 

<center>
<fieldset><legend><strong> Informations personnelles </strong></legend>

		<br>
		<label>Nom</label> <br>
		<input type="text" name="Nom" placeholder="Nom"><br><br>
		<?php 
		$name = $_POST['Nom'];
		$list = array (name);
		?>


		<label>Prénom</label> <br>
		<input type="text" name="Prenom" placeholder="Prénom"><br><br>
		<?php 
		$name = $_POST['Prenom'];
		$list = array (Prenom);
		?>


		<label>Date de naissance</label> <br>
		<input type="date" name="jj/mm/aaaa"><br><br>
		<?php 
		$name = $_POST['date'];
		$list = array (date);
		?>



		<label>Email</label> <br>
		<input type="email" name="email" placeholder="Adresse éléctronique"> ?<br><br>
		<?php 
		$name = $_POST['email'];
		$list = array (email);
		?>


<?php 
$fp = fopen('login.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>
	</fieldset>

	</center>


</body> 


</html> 