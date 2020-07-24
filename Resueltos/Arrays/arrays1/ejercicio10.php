<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

        $personas=[
            "Luis",
            "Ana",
            "Lucas",
            "Zacarias",
            "Tomas",
            "Juan",
            "Ginesa",
            "Oscar"
        ];

        //Sort
        echo "<b>Sort</b>: ".PHP_EOL;
        $sortPersona = $personas;
        sort($sortPersona);
        print_r($sortPersona);
        //rsort
        echo "<b>Rsort</b>: ".PHP_EOL;
        $rsortPersona = $personas;
        rsort($rsortPersona);
        print_r($rsortPersona);
        //asort
        echo "<b>Asort</b>: ".PHP_EOL;
        $asortPersona = $personas;
        sort($asortPersona);
        print_r($asortPersona);
        //arsort
        echo "<b>Arsort</b>: ".PHP_EOL;
        $arsortPersona = $personas;
        sort($arsortPersona);
        print_r($arsortPersona);

?>
</body>
</html>