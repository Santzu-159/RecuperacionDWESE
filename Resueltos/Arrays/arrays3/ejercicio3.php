<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pelis=[
            "Onward",
            "El hombre invisible",
            "Parásitos",
            "Sonic, la película",
            "La vida es bella",
            "Cadena perpetua",
            "El padrino",
            "Coco",
            "Forrest Gump",
            "Fast and Furious 9"
        ];

        echo "Películas sin ordenar:";
        echo "<br>";
        print_r($pelis);

        $peliculas = $pelis;
        sort($peliculas);
        echo "<br><br>";
        echo "Películas ordenadas con sort:";
        echo "<br>";
        print_r($peliculas);   
    ?>
</body>
</html>