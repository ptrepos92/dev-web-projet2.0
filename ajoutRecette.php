<?php 

    $tab=array();
	$title = $_POST['title'];
	$tab[]=$title;

	$temps= $_POST['temps'];
	$tab[]=$temps;

	$step1 = $_POST['step1'];
	$tab[]=$step1;

    $tool1 = $_POST['tool1'];
    $tab[]=$tool1;


    $url = $_POST['url'];
    $tab[]=$url;
    


$handle = fopen("Classeur3.csv", "a");
while ((fgetcsv($handle, null, ",")) !== FALSE) {
    $data[] = fgetcsv($handle, null, ",");
}

 
fputcsv($handle, $tab);
fclose($handle);



header("Location:accueil.php");

?>

