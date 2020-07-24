<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $meses =[ 
            "enero" =>9,
            "febrero"=>12,
            "marzo"=>0,
            "abril"=>17
        ];
        $peli;
        $mes;

        foreach ($meses as $mes=>$peli){
            
                if($peli > 0){
                    echo " Mes: ".$mes." --- Pelis: ".$peli."<br>".PHP_EOL;
                }
        }



    ?>
</body>
</html>