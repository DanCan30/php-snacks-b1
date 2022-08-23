<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body style="background-color: whitesmoke">

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

</body>
</html>