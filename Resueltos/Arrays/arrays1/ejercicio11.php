<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $datos=[
            "nombre"=>["Juan","Manuel"],
            "1"=>["Pepe"],
            "5"=>["Dario","Ines","Manolo"],
            "cosa"=>["Television"]
        ];

        foreach($datos as $key=>$array){
            $keys[]=$key;

            foreach($array as $value){
            $values[]=$value;

            }

        }
    
        echo "Keys:<br>".PHP_EOL;
        print_r($keys).PHP_EOL;;
        echo "<br>Valores:<br>".PHP_EOL;
        print_r($values).PHP_EOL;



    ?> 
</body>
</html>