<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
         $asoc=[ "Uno"=>1,"Dos"=>2,"Tres"=>3];
         $enum=[3,20,15];
         $mixto=[ "Azul"=>4,5,2,"Cinco"=>8];
     
         echo "Array asociativo:";
         echo "<br>";
         print_r($asoc);

         echo "<br><br>";
         echo "Array Enumerativo:";
         echo "<br>";
         print_r($enum);

         echo "<br><br>";
         echo "Array Mixto:";
         echo "<br>";
         print_r($mixto);
         echo "<br><br>";

         $conjunto= array_merge($asoc,$enum,$mixto);
         $suma= array_sum($conjunto);
         echo "La suma total es de: ".$suma;

    ?>
</body>
</html>