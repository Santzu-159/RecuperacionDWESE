<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ciudades=["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];

        for($i=0;$i<count($ciudades);$i++){

            echo "La ciudad con el índice ".$i." tiene el nombre de ".$ciudades[$i]."<br>".PHP_EOL;
        }
    ?>
</body>
</html>