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
     $_SESSION['username']= $password ;
      require 'base.php';
} else {
    header("Location:connexion.php");
}



?>

</body>
</html>
