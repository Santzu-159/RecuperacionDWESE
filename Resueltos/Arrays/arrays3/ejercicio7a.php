<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ruleta=[
            "Estudiar",
            "Jugar a videojuegos",
            "Jugar juegos de mesa",
            "Ver una serie",
            "Ver una película",
            "Dormir",
            "No hacer nada",
            "Dar un paseo",
            "Hacer ejercicio"
        ];

        echo "La actividad del día es:";
        shuffle($ruleta);
        echo $ruleta[0];    
    
    ?>
</body>
</html>