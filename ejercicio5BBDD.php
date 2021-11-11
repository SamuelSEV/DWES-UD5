<?php
    $servidor = "localhost";
    $basesDatos = "usuarios";
    $usuario = "root";
    $password = "root";
    
    function insertarElemento($nombre, $pass, $cuenta) {
        try {
            $conn = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[basesDatos]",$GLOBALS['usuario'],$GLOBALS['password']);
            $insert=$conn->prepare("INSERT INTO usuarios (nombre, contraseña, cuenta) VALUES (?,?,?)");
            $insert->bindParam(1, $nombre);
            $insert->bindParam(2, $pass);
            $insert->bindParam(3, $cuenta);
            $insert->execute();
            $conn = null;
            return true;
        } catch (PDOException $e) {
            echo  $e;
        }
    } 
?>