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

            $colores=[
                "Colores fuertes"=>[
                    "FF0000",
                    "00FF00",
                    "0000FF"
                ],

                "Colores suaves"=>[
                    "FE9ABC",
                    "FDF189",
                    "BC8F8F"
                ]
            ];
        
                function buscar($array, $color){

                    foreach($array as $key=>$value){
                        if (in_array($color,$value)){
                            echo "El color $color está en el array";
                            echo "<br>";
                            return;
                        }
                    }
                    echo "El color $color no está en el array";
                    echo "<br>";
                }
        
                buscar($colores,"FF88CC");
                buscar($colores,"FF0000");

        ?>
    </body>
</html>