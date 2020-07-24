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

            $dias=[
                "Lunes",
                "Martes",
                "Miércoles",
                "Jueves",
                "Viernes",
                "Sábado",
                "Domingo"
            ];

            echo "Bucle foreach:";
            echo "<br>";
            foreach($dias as $indice=>$valor)	{
            echo $indice." -> ".$valor;
            echo "<br>";
            }
  
            echo "<br>";
            echo "Bucle for:";
            echo "<br>";

            for($i=0;$i<count($dias);$i++){
                echo $i." -> ".$dias[$i];
                echo "<br>";
            }   

        ?>
      
    </body>
</html>