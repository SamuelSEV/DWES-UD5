<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <?php
        
        session_start();
        if ($_SESSION['perfil']=="usuario") {
            echo "hola pringao";
        }
        elseif($_SESSION['perfil']=="admin"){
            echo "Eres el jefe supremo, ¿no quieres ir a tu página?";
        }
        else {
            header("Location: ejercicio7.php");
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if($_POST['cerrar']){
                header("Location: cierraSession.php");
            }
        }
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p><input type="submit" value="Cerrar sesion" name="cerrar"></p>
    </form>
</body>
</html>