<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']))

    {
        $nombre_usuario = $_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empleado</title>
</head>
<body>
    <h1>Registrar Empleado</h1>
    <!-- formulario de regstro de empleado-->   

    <form action = "modelo/reg_empleado.php" method = "post">
        <h2> Empleado <h2>
        <label for="">Codigo:</label>
        <input type= "text" name= "id empleado" id="" require>
        <br><br> 
        <label for="">Nombre:</label>
        <input type= "text" name= "nombre_empleado" id="" require>
        <br><br> 
        <label for="">Apellidos:</label>
        <input type= "text" name= "apellidos_empleado" id="" require>
        <br><br> 
        <label for="">Departamento:</label>
        <input type= "text" name= "departamento_empleado" id="" require>
        <br><br> 
        <button type ="submit"> Registrar </button>
    </form>
</body>
</html>