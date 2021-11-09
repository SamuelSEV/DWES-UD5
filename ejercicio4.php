<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{ border: 3px solid black;border-collapse: collapse;text-align: center;}
        td{padding:10px;}
    </style>
    <title>Ejercicio 4</title>
</head>
<body>
    <table border="1" >
        
        <tr style="background-color:lightgreen;">
            <th>Nombre</th>
            <th>Funcion</th>
            <th>Valor</th>
        </tr>
            
        <tr style="background-color:lightblue;">
            <td>session.use_cookies</td>
            <td>especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente. </td>
            <td>Por defecto es 1 (habilitado). Puede ser 0 (deshabilitado)</td>
        </tr>
        <tr style="background-color:lightgreen;">
            <td>session.use_only_cookies</td>
            <td>especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que implican pasar el id de sesión en la URL.</td>
            <td>Por defecto es 1 (habilitado). Puede ser 0 (deshabilitado)</td>
        </tr>
        <tr style="background-color:lightblue;">
            <td>session.save_handler</td>
            <td>define el argumento que es pasado al gestor de almacenamiento. Si se elige el gestor de archivos por defecto, éste es la ruta donde los archivos son creados. </td>
            <td>Hay un argumento opcional N para esta directiva que determina el número de niveles de directorios por donde los archivos de sesión se desplegarán. Por ejemplo, establecerlo a '5;/tmp' puede terminar en crear un archivo de sesión y ubicación como /tmp/4/b/1/e/3/sess_4b1e384ad74619bd212e236e52a5a174If . Para usar N se deben crear todos estos directorios antes de utilizarlo. Para realizar esto, existe un pequeño script tipo shell en ext/session que se llama mod_files.sh, con una versión de Windows llamada mod_files.bat. Observe también que si N se usa y es más grande que 0 no se llevará a cabo la recolección de basura automática, vea una copia de php.ini para más información. También, si usa N, asegúrese de encerrar session.save_path entre "comillas" ya que el separador (;) también se usa para comentarios en php.ini.</td>
        </tr>
        <tr style="background-color:lightgreen;">
            <td>session.name</td>
            <td>especifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos.</td>
            <td>Por defecto es PHPSESSID.</td>
        </tr>
        <tr style="background-color:lightblue;">
            <td>session.auto_start</td>
            <td>especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición.</td>
            <td>Por defecto es 0 (deshabilitado). Puede ser 1 (habilitado)</td>
        </tr>
        <tr style="background-color:lightgreen;">
            <td>session.cookie_lifetime</td>
            <td>especifica el tiempo de vida en segundos de la cookie que es enviada al navegador.</td>
            <td>El valor 0 significa "hasta que el navegador se cierre". Por defecto es 0.</td>
        </tr>
        <tr style="background-color:lightblue;">
            <td>session.gc_maxlifetime</td>
            <td>especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. La recolección de basura puede suceder durante el inicio de sesiones (dependiendo de session.gc_probability y session.gc_divisor).</td>
            <td>El valor puede ser el numero de segundos por ejemplo 1440</td>
        </tr>
        
    </table>
   
</body>
</html>