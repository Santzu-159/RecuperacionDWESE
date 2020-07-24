<?php
    session_start(); //abrimos la sesion
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){ //Si se pulsa el botón enviar....
            //acciones
           // if (file_exists('usuarios.txt')){ //comprobamos si el archivo que contiene los usuarios existe
            //}
            if($_POST['pass'] == $_POST['confirm']){ //comprobamos si las contraseñas coinciden
                
                $usuario = $_POST['user'];
                $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

                $texto = "";
                //Mientras haya un línea que obtener, se concatena el contenido de la línea con la variable texto
                while($linea = fgets($fh))
                {
                    //comprobamos si el usuario se encuentra en el archivo o no
                    $texto = explode(";", $linea); //separamos $linea con ; para poder adquirir solo los usuarios

                    if(trim($texto[0])==$usuario){
                        $_SESSION['error']='El usuario ya está registrado'; //si es igual mandamos un mensaje de error y redirigimos a la misma página
                        header('Location:register.php');
                    }                   
                }

                $fh = fopen("usuarios.txt", 'w') or die("Se produjo un error al crear el archivo"); //comprobamos si el archivo que contiene los usuarios existe
                                                                                                     //si el proceso falla, da un error y acaba.
                
                //esto es lo que introduciremos en el archivo usuarios.txt
                $texto = <<<_END
                    $usuario;$pass;  
                _END;

                fwrite($fh, $texto) or die("No se pudo escribir en el archivo"); //Escribirmos en el fichero
                fclose($fh); //cerramos el fichero
                //$_SESSION['usuario']=$usuario; //recoge el usuario para luego usarlo
                header('Location:login.php'); //nos vamos a la página login.php

            }else{
                $_SESSION['error']="Las contraseñas no coinciden"; //mensaje de error para mostrarlo mas tarde
                header('Location:register.php'); //volvemos a register.php
            }

        }else{
    ?>
    <h1 align='center'>Registro</h1>
    <?php
        if(isset($_SESSION['error'])){
            ?>
            <div class='container bg-warning'>
                <h3 class='text-center'><?php echo $_SESSION['error'] //mostramos el mensaje de error ?></h3> 
            </div>
            <?php
        }
    ?>
    <div class='container mt-5'>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" class="form-control" id="user" aria-describedby="emailHelp" name='user'>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="pass" name='pass'>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="confirm" name='confirm'>
            </div>

            <!--<div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>-->
            <input type="submit" class="btn btn-primary" name="enviar"/>
        </form>
    </div>        
    <?php
        } //fin del else
    ?>
</body>
</html>