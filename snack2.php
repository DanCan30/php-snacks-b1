<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body style="background-color: whitesmoke">

<h2>Snack 2</h2>
    <h3>
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    </h3>
    
    
    <?php 
    
        $name = ($_GET["name"]);
        $email = ($_GET["email"]);
        $age = ($_GET["age"]);

        if (!isset($name) || !isset($email) || !isset($age)) {
            echo "Please insert valid data.";
        } else {
            echo "Name: ".$name."<br> Email: ".$email."<br> Age: ".$age;
        }

    ?>
    <br>
    <?php
        if((strlen($name) > 3)
        && ((strpos($email, "@", 1)) && (strpos($email, ".", strpos($email, "@"))) && (substr($email, -1) != "."))
        && (is_numeric($age))) {
            echo "Validation done!";
        } else {
            echo "Error";
        }
        
    ?>
    
</body>
</html>