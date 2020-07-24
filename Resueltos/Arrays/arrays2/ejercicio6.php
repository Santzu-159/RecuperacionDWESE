<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $array=[
            "Albania"=>"Tirana",
            "Alemania"=>"Berlín",
            "Andorra"=>"Andorra la Vieja",
            "Armenia"=>"Ereván",
            "Austria"=>"Viena",
            "Azerbaiyán"=>"Bakú",
            "Belgica"=>"Bruselas",
            "Bielorrusia"=>"Minsk",
            "Bosnia-Herzegovina"=>"Saravejo",
            "Bulgaria"=>"Sofía",
            "Chipre"=>"Nicosia",
            "Ciudad del Vaticano"=>"Ciudad del Vaticano",
            "Croacia"=>"Zagreb",
            "Dinamarca"=>"Copenhague",
            "Eslovaquia"=>"Bratislava",
            "España"=>"Madrid",
            "Estonia"=>"Tallin",
            "Federación Rusa"=>"Moscú",
            "Finlandia"=>"Helsinki",
            "Francia"=>"París",
            "Georgia"=>"Tiflis",
            "Grecia"=>"Atenas",
            "Hungría"=>"Budapest",
            "Irlanda"=>"Dublín",
            "Islandia"=>"Reikiavik",
            "Italia"=>"Roma",
            "Kazajistán"=>"Astana",
            "Letonia"=>"Riga",
            "Liechtenstein"=>"Vaduz",
            "Lituania"=>"Vilna",
            "Luxemburgo"=>"Luxemburgo",
            "Macedonia del Norte"=>"Skopie",
            "Malta"=>"La Valeta",
            "Moldova"=>"Chisináu",
            "Mónaco"=>"Mónaco",
            "Montenegro"=>"Podgorica",
            "Noruega"=>"Oslo",
            "Países Bajos"=>"Ámsterdam",
            "Polonia"=>"Varsovia",
            "Portugal"=>"Lisboa",
            "Reino Unido"=>"Londres",
            "República Checa"=>"Praga",
            "Rumania"=>"Bucarest",
            "San Marino"=>"San Marino",
            "Serbia"=>"Belgrado",
            "Suecia"=>"Estocolmo",
            "Suiza"=>"Berna",
            "Ucrania"=>"Kiev"
        ];
    
        foreach($array as $pais=>$capital)	{
            echo "La capital de ".$pais." es ".$capital;
            echo "<br>";
        }
    
        ksort($array);
        echo "<b>Paises:</b>";
        foreach($array as $pais=>$capital)	{
            echo "La capital de ".$pais." es ".$capital;
            echo "<br>";
        }
    
        asort($array);
        echo "<b>Capitales:</b>";
        foreach($array as $pais=>$capital)	{
            echo "La capital de ".$pais." es ".$capital;
            echo "<br>";
        }  
    ?>
</body>
</html>