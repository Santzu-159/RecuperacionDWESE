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
            $alumnos=[
                "Sandra",
                "Miguel Ángel",
                "Eduardo",
                "Jose Manuel",
                "Juan"
            ];

            echo "Los 3 primeros alumnos:";
            echo "<br>";
            echo "Usando array_slice:";
            echo "<br>";
            
            $lista=array_slice($alumnos,0,3);
            print_r($lista);
            echo "<br>";
            echo "Usando array_splice:";
            echo "<br>";

            $lista=$alumnos;
            array_splice($lista,3);
            print_r($lista);

            echo "<br>";
            echo "<br>";

            echo "Los dos últimos alumnos:";
            echo "<br>";

            echo "Usando array_slice:";
            echo "<br>";
            $lista=array_slice($alumnos,count($alumnos)-2);
            print_r($lista);
            echo "<br>";

            echo "Usando array_splice:";
            echo "<br>";
            $lista=$alumnos;
            array_splice($lista,0,count($alumnos)-2);
            print_r($lista);
    

        ?>
    </body>
</html>