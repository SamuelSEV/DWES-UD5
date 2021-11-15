<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        require_once("ejercicio6BBDD.php");
        $error = "";
        $verificar = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST['usuario'];
            $pass = $_POST['contraseña'];
            $user = getUser($user);
            $verificar = password_verify($pass, $user['contraseña']);
            

            if ($verificar) {
                $error = "<p style='color:green'>Sesión iniciada correctamente.</p>";
                
            } 
            else {
                $error = "<p style='color:red'>Contraseña incorrecta.</p>";
            }

            
            
        }


    ?>
    <h1>Iniciar Sesión</h1>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p><input type="text" name="usuario" id="usuario" placeholder="Usuario"></p>
        <p><input type="password" name="contraseña" id="contraseña" placeholder="Contraseña"></p>
        <p><input type="submit" value="Iniciar Sesion" name="submit"></p>
    </form>
    
    <div><?php echo $error;?></div>
</body>
</html>