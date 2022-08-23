<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body style="background-color: whitesmoke">

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
    
</body>
</html>