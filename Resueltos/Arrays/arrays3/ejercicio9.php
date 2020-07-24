<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombres = array
    ('roberto','juan','marta','moria','martin','jorge','miriam','nahuel','mirta');
        $porM=[];

        foreach($nombres as $value){
            if(strtolower($value[0])=='m'){
                $porM[]=$value;
            }
        }

        foreach($porM as $nombre){
            echo $nombre;
            echo "<br>";
        }
    ?>
</body>
</html>