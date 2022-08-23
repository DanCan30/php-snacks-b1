<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body style="background-color: whitesmoke">

    <h1>PHP SNACKS BLOCCO 1</h1>
    
    <hr>

    <h2>Snack 1</h2>
    <h3> Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. </h3>
    <?php 
        $matches = [
            [
                "team1" => "Boston Celtics",
                "team2" => "Chicago Bulls",
                "team1Score" => "50",
                "team2Score" => "70"
            ],
            [
                "team1" => "Brooklyn Nets",
                "team2" => "New York Knicks",
                "team1Score" => "75",
                "team2Score" => "24"
            ],
            [
                "team1" => "Toronto Raptors",
                "team2" => "Atlanta Hawks",
                "team1Score" => "86",
                "team2Score" => "65"
            ],
            [
                "team1" => "Miami Heat",
                "team2" => "Detroit Pistons",
                "team1Score" => "32",
                "team2Score" => "75"
            ],
            [
                "team1" => "Orlando Magic",
                "team2" => "Cliveland Cavaliers",
                "team1Score" => "26",
                "team2Score" => "84"
            ],
        ]
    ?>


    <?php 

        for ($i = 0; $i < count($matches); $i++) {

            $match = $matches[$i];

            echo "<h3>".$match["team1"]." - ".$match["team2"]." | ".$match["team1Score"]."-".$match["team2Score"]."</h3>" ;
        }

    ?>

    <hr>
    <hr>

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

    <hr>
    <hr>

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

    <hr>
    <hr>


    <h2>Snack 5</h2>
    <h3>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.</h3>

    <?php 
    
        $text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ullam possimus veniam, maiores, omnis aspernatur aperiam minus iure quisquam delectus est esse sint illo saepe, ea adipisci a? Ducimus, sapiente.
        At fugit voluptatum et nihil earum quibusdam nostrum. Cupiditate temporibus quod iste natus, adipisci ut. Odio repellendus mollitia incidunt nam dicta, in perspiciatis vitae. Voluptatibus error cumque dignissimos itaque ratione?
        Aut autem corporis perspiciatis sunt, deserunt quam! Hic necessitatibus quod quam nesciunt, recusandae eum saepe nihil rem delectus, nobis assumenda ducimus cum numquam enim nemo eos molestias voluptatibus molestiae accusantium.
        Labore vero tenetur animi, officiis explicabo nesciunt. Adipisci molestias, expedita voluptas nostrum autem fugit voluptatum quia ipsa magnam iste, est totam dignissimos exercitationem et minus delectus officiis voluptatem, nisi earum.
        Voluptate aperiam suscipit est consequatur dolorem ipsum ex dicta numquam deleniti debitis. Iste consectetur in minima nesciunt. Beatae nulla quod ratione, eligendi omnis magnam modi! Molestiae hic vel suscipit sunt?";

    ?>

    <div>
        <?php 
            $substrings = explode(".", $text);

            echo $text;

        ?>

        <hr>

        <?php

            for($i = 0; $i < count($substrings); $i++) {
                echo "<p>".$substrings[$i]."."."</p>";
            }
        ?>
    </div>

    <hr>
    <hr>

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