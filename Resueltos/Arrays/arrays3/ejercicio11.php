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
            $mayor=PHP_INT_MIN;
            $array=[];

            for($i=0;$i<10;$i++){
                $array[$i]=rand(-100,100);
            }
            
            foreach($array as $value){
                if($value>$mayor){
                    $mayor=$value;
                }
            }

            print_r($array);
            echo "<br><br>";
            echo "El número mayor del array es $mayor";
        ?>
    </body>
</html>