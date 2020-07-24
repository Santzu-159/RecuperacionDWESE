<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre=[

                "Pedro",
                "Ismael",
                "Sonia",
                "Clara",
                "Susana",
                "Alfonso",
                "Teresa"
        ];

        echo "Numero de elementos: ".count($nombre)."<br><br>".PHP_EOL;
        echo "<ul>".PHP_EOL;
        do{
            echo "<li>".current($nombre)."</li><br>".PHP_EOL;

        }while(next($nombre));

        echo "</ul>".PHP_EOL;
    ?>                
    
</body>
</html>