<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['perfil']=="") {
            header("Location: ejercicio6.php");
        }
        elseif($_SESSION['perfil']=="usuario"){
            header("Location: usuario.php");
        }
        else {
            echo "Eres el jefe supremo";
        }
    ?>
</body>
</html>