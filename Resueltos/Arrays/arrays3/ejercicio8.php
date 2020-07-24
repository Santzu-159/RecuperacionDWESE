<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array=[];
        $tamanio=20;
    
        for($i=0;$i<$tamanio;$i++){
            $array[$i]=rand(10,1000)/10;
        }
        print_r($array);
        
        $suma=sumar($array);
        $promedio=$suma/$tamanio;
    
        echo "<br><br>";
        echo "El promedio del array es $promedio".PHP_EOL;
    
        function sumar($arr){   
            if(is_numeric(current($arr))){
                $valor=current($arr);
                next($arr);
                return $valor+sumar($arr);
            }else{
                return 0;
            }
        }

    ?>
</body>
</html>