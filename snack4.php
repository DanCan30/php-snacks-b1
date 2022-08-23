<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body style="background-color: whitesmoke">

    <h2>Snack 4</h2>
    <h3>Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta </h3>
    
    <?php 
    
        $numbers = [];

        while(count($numbers) < 15) {
            $randomNumber = rand(1, 15);

            if(!in_array($randomNumber, $numbers)) {
                $numbers[] = $randomNumber;
            }

        };

        var_dump($numbers);

    ?>
    
</body>
</html>