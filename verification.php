<!doctype html>
<html>
<body>



<?php

$username = $_POST['username'];
$password = $_POST['password'];


$success = false;

$handle = fopen("login.csv", "r");
while (($data = fgetcsv($handle)) !== FALSE) {
    if ($data[0] == $username && $data[1] == $password) {
        $success = true;
        break;
    }
}

fclose($handle);

if ($success) {
    session_start();
     $_SESSION['username'] = $username;
     $_SESSION['password'] = $password ;
     $_SESSION['date'] = $data[3] ;
     $_SESSION['email'] = $data[2];
     header("Location:accueil.php");;
} else {
    header("Location:connexion.php");
}



?>

</body>
</html>
