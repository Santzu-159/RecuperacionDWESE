<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pila = array(
            "cinco"=>5,
            "uno"=>1,
            "cuatro"=>4,
            "dos"=>2,
            "tres"=>3
        );


        echo "<b>Asort</b>";
        echo "<br>";
        $array=$pila;
        asort($array);
        print_r($array);

        echo "<br>";
        echo "<b>Arsort</b>";
        echo "<br>";
        $array=$pila;
        arsort($array);
        print_r($array);

        echo "<br>";
        echo "<b>Ksort</b>";
        echo "<br>";
        $array=$pila;
        ksort($array);
        print_r($array);
    
        echo "<br>";
        echo "<b>Sort</b>";
        echo "<br>";
        $array=$pila;
        sort($array);
        print_r($array);
    
        echo "<br>";
        echo "<b>Rsort</b>";
        echo "<br>";
        $array=$pila;
        rsort($array);
        print_r($array);

    ?>
</body>
</html>