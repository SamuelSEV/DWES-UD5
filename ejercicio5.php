<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        include 'ejercicio5BBDD.php';
        $nombre = "";
        $pass = "";
        $cuenta = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nombre = $_POST['nombre'];
            $pass = $_POST['pass'];
            $cuenta = $_POST['cuenta'];
            $pass = password_hash($pass,PASSWORD_DEFAULT);
            
            
            insertarElemento($nombre, $pass, $cuenta);
     
        }
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p><input type="text" name="nombre" id="nombre" placeholder="Nombre"></p>
        <p><input type="password" name="pass" id="pass" placeholder="Contraseña"></p>
        <p><input type="number" name="cuenta" id="cuenta" placeholder="Número Cuenta Bancaria"></p>
        <p><input type="submit" value="Registrar" name="submit"></p>
    </form>
</body>
</html>