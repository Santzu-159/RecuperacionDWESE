<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $articulos=[
        "articulo1"=>[
            "nombre"=>"Bombilla",
            "pvp"=>23.4,
            "tipo"=>"Electricidad",
            "stock"=>45
        ],
        "articulo2"=>[
            "nombre"=>"Brasero",
            "pvp"=>123.4,
            "tipo"=>"Electricidad",
            "stock"=>4
        ],
        "articulo3"=>[
            "nombre"=>"Monitor led 19",
            "pvp"=>203.4,
            "tipo"=>"Informatica",
            "stock"=>5
        ],
        "articulo4"=>[
            "nombre"=>"tablet 10",
            "pvp"=>123.4,
            "tipo"=>"Informatica",
            "stock"=>45
        ]
        ];
        
        function tablaBase(){
            global $countStock;
            $countStock=0;
            echo "<br><table align='center' border=2>".PHP_EOL;
            echo "<tr bgcolor='gray' align='center'>".PHP_EOL.
            "<td bgcolor='white'></td>".PHP_EOL.
            "<td>Nombre</td>".PHP_EOL.
            "<td>PVP (€)</td>".PHP_EOL.
            "<td>Tipo</td>".PHP_EOL.
            "<td>Stock</td>".PHP_EOL.
            "</tr>".PHP_EOL;
        }        

        tablaBase();
        foreach($articulos as $key=>$value){
            echo "<tr>";
            echo "<td bgcolor='gray'>".$key."</td>";
            $countStock+=$value['stock'];
            foreach($value as $k=>$v){
                echo "<td>".$v."</td>";
            }
            echo "</tr>";
        }
        echo "</table>".PHP_EOL;

        echo "<br>El total de stock es de : $countStock<br><br>".PHP_EOL;

        tablaBase();
        foreach($articulos as $key=>$value){
            if($value['tipo']=='Informatica'){
                echo "<tr>";
                echo "<td bgcolor='gray'>".$key."</td>";
                $countStock+=$value['stock'];
                foreach($value as $k=>$v){
                    echo "<td>".$v."</td>";
                }
                echo "</tr>";
            }            
        }        
        echo "</table>".PHP_EOL;

        echo "<br>El total de stock es de : $countStock<br><br>".PHP_EOL;
    ?>
</body>
</html>