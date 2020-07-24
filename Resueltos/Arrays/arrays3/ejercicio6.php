<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $caras=[
            1,2,3,4,5,6
        ];
    
        echo "Resultado: ";
        shuffle($caras);
        echo $caras[0];
    ?>
</body>
</html>