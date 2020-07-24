<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <?php
            $array=[
                rand(0,100),
                rand(0,100),
                rand(0,100),
                rand(0,100),
                rand(0,100)
            ];

            print_r($array);
            echo "<br>";
            $suma =array_sum($array);
            print_r("Resultado de la suma de los numeros del array: ".$suma);

        ?>
    
    </body>
</html>