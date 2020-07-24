<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $colores=[
            "Colores fuertes"=>[
                "Rojo:FF0000",
                "Verde:00FF00",
                "Azul:0000FF"
            ],
            "Colores suaves"=>[
                "Rosa:FE9ABC",
                "Amarillo:FDF189",
                "Malva:BC8F8F"
            ]
            ];
    
            echo "<br><br>";
    
            echo "<table align='center'>".PHP_EOL;
            foreach($colores as $key=>$value){
                echo "<tr>";
                echo "<td>".$key."</td>";
                foreach($value as $k=>$v){
                    echo "<td bgcolor=#".substr($v,-6).">".$v."</td>";
                }
                echo "</tr>";
            }    
            echo "</table>".PHP_EOL;
    ?>
</body>
</html>