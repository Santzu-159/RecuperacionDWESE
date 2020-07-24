<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $numero=0;//Contador
        for($i=2;$numero<10;$numero++){ // Bucle de 10 iteraciones, comienza en 2 para que cuente a partir de 2
            $array[$numero]=$i; //Le pasamos el contador al Array y lo igualamos a i
            $i+=2; //le sumamos dos para obtener los pares
        }

        do{
            echo current($array)."<br>".PHP_EOL; //mostramos el array
        }while(next($array)); //hasta que no haya más que mostrar
    ?>
</body>
</html>