<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $menor=PHP_INT_MAX;
            $array=[];
        
            for($i=0;$i<10;$i++){
                $array[$i]=rand(-100,100);
            }
            
            foreach($array as $value){
                if($value<$menor){
                    $menor=$value;
                }
            }
        
            print_r($array);
            echo "<br><br>";
            echo "El número menor del array es $menor";

    ?>
</body>
</html>