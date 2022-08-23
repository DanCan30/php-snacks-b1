<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body style="background-color: whitesmoke">

    <h2>Snack 7</h2>
    <h3>
        Creare un array contenente qualche alunno di un'ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
    </h3>

    <?php 
    
        $students = [
            [
                "name" => "Student 1",
                "surname" => "Last Name 1",
                "votes" => [
                    "italian" => rand(3, 10),
                    "math" => rand(3, 10),
                    "geography" => rand(3, 10),
                    "phisical education" => rand(7, 10),
                    "english" => rand(3, 10),
                    "history" => rand(3, 10),
                    "behavior" => rand(5, 10),
                ]
            ],
            [
                "name" => "Student 2",
                "surname" => "Last Name 2",
                "votes" => [
                    "italian" => rand(3, 10),
                    "math" => rand(3, 10),
                    "geography" => rand(3, 10),
                    "phisical education" => rand(7, 10),
                    "english" => rand(3, 10),
                    "history" => rand(3, 10),
                    "behavior" => rand(5, 10),
                ]
            ],
            [
                "name" => "Student 3",
                "surname" => "Last Name 3",
                "votes" => [
                    "italian" => rand(3, 10),
                    "math" => rand(3, 10),
                    "geography" => rand(3, 10),
                    "phisical education" => rand(7, 10),
                    "english" => rand(3, 10),
                    "history" => rand(3, 10),
                    "behavior" => rand(5, 10),
                ]
            ],
            [
                "name" => "Student 4",
                "surname" => "Last Name 4",
                "votes" => [
                    "italian" => rand(3, 10),
                    "math" => rand(3, 10),
                    "geography" => rand(3, 10),
                    "phisical education" => rand(7, 10),
                    "english" => rand(3, 10),
                    "history" => rand(3, 10),
                    "behavior" => rand(5, 10),
                ]
            ],
            [
                "name" => "Student 5",
                "surname" => "Last Name 5",
                "votes" => [
                    "italian" => rand(3, 10),
                    "math" => rand(3, 10),
                    "geography" => rand(3, 10),
                    "phisical education" => rand(7, 10),
                    "english" => rand(3, 10),
                    "history" => rand(3, 10),
                    "behavior" => rand(5, 10),
                ]
            ],

        ];
    ?>

    <ul>

        <?php for($i = 0; $i < count($students); $i++) { 
            $sum = array_sum($students[$i]["votes"]);
            $average = number_format($sum / count($students[$i]["votes"]), 1);
        ?>
        <li>
            <?php 
                
                echo $students[$i]["name"]." ".$students[$i]["surname"]." / Average Votes: ".$average." - Behavior: ".$students[$i]["votes"]["behavior"];

            ?>
        </li>
        <?php } ?>
        
    </ul>

</body>
</html>