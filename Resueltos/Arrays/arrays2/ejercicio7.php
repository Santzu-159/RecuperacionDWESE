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

            $arrayNumeros = array();
            $cont =0;

            for ($i=0;$i<10;$i++) {

                $aleatorio = rand(1,10);
                array_push($arrayNumeros,$aleatorio);

                if($aleatorio == 2){
                    $cont++;    
                }
            }

            print_r($arrayNumeros); //array rellenado de manera random en el for
            echo "<br>El numero 2 se repite ".$cont." veces.".PHP_EOL;

        ?>
    </body>
</html>