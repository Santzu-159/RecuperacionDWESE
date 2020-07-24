<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table align='center' border=2>";
        for($i=0;$i<20;$i++){
            echo "<tr>";
            for($j=0;$j<10;$j++){
                echo "<td>Celda [$i,$j]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>