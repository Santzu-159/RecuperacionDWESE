<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $paises = array (
            'alemania',
            'brasil',
            'italia',
            'chile',
            'uruguay',
            'australia'
        );

        echo "Paises: <br>";
        print_r($paises);
        echo "<br>";

        echo "<br>Eliminamos Alemania, Italia y Australia: <br>";
        unset($paises[0],$paises[2],$paises[5]);
        print_r($paises);

        echo "<br><br>";
        echo "Insertamos ‘argentina’ y ‘bolivia’:";
        echo "<br>";
        $paises[]="argentina";
        $paises[]="bolivia";
        print_r($paises);
        echo "<br><br>";

        echo "Array ordenado alfabéticamente: <br>";
        sort($paises);
        print_r($paises);

    ?>
</body>
</html>