<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
        <style>
       * {
            font-family: arial;
        }
 
        body {
            margin: 20px;
        }
 
        form {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -150px;
            margin-top: -100px;
        }
 
        input {
            border: solid 1px blue;
            margin-bottom: 5px;
            padding: 16px;
            outline: none;
            border-radius: 7px;
            width: 300px;
        }

/* Set a style for all buttons */
        input[type=submit] {
        background-color: #53af57;
        color: white;
        padding: 5px;
        margin: 8px;
        border: none;
        cursor: pointer;
        width: 100%;
}
        input[type=submit]:hover {
        background-color: white;
        color: #53af57;
        border: 1px solid #53af57;
}
    </style>
</head>

<body>

<form name="form" action="ajoutRecette.php" method="POST">
        <div>
            <label for="title "> Titre: </label>
            <input type="title" name="title" id="title" placeholder="Entrez vore titre">
        </div><br><br>
        <div>
            <label for="temps "> Temps d'execution: </label>
            <input type="temps" name="tempos" id="temps" placeholder="Entrez le temps d'execution">
        </div><br><br>

		<div>
            <label for="step1 "> Etapes 1: </label>
            <input type="step" name="step1" id="step1" placeholder="Entrez etape 1">
        </div><br><br>
        
         <div>
            <label for="tool1 "> Outils 1 </label>
            <input type="tool1" name="tool1" id="tool1" placeholder="Entrez tool 1">
        </div><br><br>
            
        <div>
            <label for="url"> Photo url: </label>
            <input type="url" name="url" id="url" placeholder="Entrez l'url de la photo">
        </div><br><br>
        

		<input type="submit"  name="valider" value="ajoutRecette">
 
 </form>


 </body> 
</html>
