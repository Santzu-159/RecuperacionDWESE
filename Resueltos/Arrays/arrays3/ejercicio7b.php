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
        $tamanio=5;
        $condicional=6;
        $mayores=0;
        $menores=0;

        for($i=0;$i<$tamanio;$i++){
            $array[$i]=rand(1,100);
        }
        
        print_r($array);

        foreach($array as $value){
            if($value>$condicional){
                $mayores++;
            }else if($value<$condicional){
                $menores++;
            }
        }
        
        if($mayores>$menores){
            echo "<br>";
            echo "La mayoría son mayores que 6";
        }else if($mayores<$menores){
            echo "<br>";
            echo "La mayoría son menores que 6";
        }else{
            echo "<br>";
            echo "Existe la misma cantidad.";
        }
    ?>
</body>
</html>