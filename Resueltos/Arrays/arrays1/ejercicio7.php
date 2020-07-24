<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ciudades=[

            "MD"=>"Madrid",
            "BCN"=>"Barcelona",
            "LOND"=>"Londres",
            "NY"=>"New York",
            "LA"=>"Los Angeles",
            "CHIC"=>"Chicago"
        ];

        foreach($ciudades as $key=>$value){

            echo "El índice del array que contiene como valor ".$value." es ".$key."<br>".PHP_EOL;
        }
    ?>
</body>
</html>