<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $limite=50;
        $contDiv=0;

            for($cont=2;$cont<=$limite;$cont++){

                for($i=2;$i<$cont && $contDiv==0;$i++){

                    if($cont%$i==0){
                        $contDiv++;
                    }
                }
                if($contDiv==0){
                    echo "$cont, ";
                }else{
                    $contDiv=0;
                }
            }
    ?>
    
</body>
</html>