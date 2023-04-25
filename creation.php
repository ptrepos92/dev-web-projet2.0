<?php 

    $tab=array();
	$id = $_POST['id'];
	$tab[]=$id;

	$motdepasse= $_POST['motdepasse'];
	$tab[]=$motdepasse;

	$email = $_POST['email'];
	$tab[]=$email;

    $date = $_POST['date'];
    $tab[]=$date;
    


	$confirmationemail = $_POST['confirmationemail'];
    
    if ($email == $confirmationemail)
    {
    echo "Valide";
    }
    else
    {
    echo "Veuillez verifier votre adresse mail ! ";
    }

	$confirmationmotdepasse = $_POST['confirmationmotdepasse'];
    
    if ($motdepasse == $confirmationmotdepasse)
    {
    echo "Valide";
    }
    else
    {
    echo "Veuillez verifier votre mot de passe ! ";
    }


?>



<?php


$success = true;

$handle = fopen("login.csv", "a");
while (($data = fgetcsv($handle)) !== FALSE) {
    if ($data[0] == $id) {
        $success = false;
        echo "votre id existe déjà";
        break;
    }
    if ($data[2] == $email) {
        $success = false;
        echo "votre id ou votre email existe déjà";
        break;
    }
}


fputcsv($handle, $tab);
fclose($handle);



if ($success == true) {
     echo "ton compte vient d'être créer";
     header("Location:accueil.php");

} else {
    header("Location:creercompte.php");
}

?>

