<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require 'conexion.php';
    session_start();

    if(isset($_SESSION['username']))
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_emp = $_POST['id_empleado'];
            $nombre_emp = $_POST['nombre_empleado'];
            $apellidos_emp = $_POST['apellidos_empleado'];
            $departamento_emp = $_POST['departamento_empleado'];

            $query ="INSERT INTO Empleado(id_empleado, nombre_empleado, apellidos_empleado,
            id_departamento) VALUES('$id_emp', '$nombre_emp', '$apellidos_emp', '$departamento_emp')";
        
            $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la insercion de los 
            datos: ".mysqli_error($conexion));

            if($insercion)
            {
                echo '<script type="text/javascript">
                        alert("Empleado registrado!");
                        window.location.href = "este_mismo_archivo.php";
                    </script>';
                exit;
            }
            else
            {
                header('location: ../index.php');
                exit;
            }
        }
    }
?>

<!-- FORMULARIO -->
<form method="POST" action="">
    <label for="id_empleado">ID Empleado:</label><br>
    <input type="text" id="id_empleado" name="id_empleado" required><br><br>

    <label for="nombre_empleado">Nombre:</label><br>
    <input type="text" id="nombre_empleado" name="nombre_empleado" required><br><br>

    <label for="apellidos_empleado">Apellidos:</label><br>
    <input type="text" id="apellidos_empleado" name="apellidos_empleado" required><br><br>

    <label for="departamento_empleado">Departamento:</label><br>
    <select id="departamento_empleado" name="departamento_empleado" required>
        <option value="">Seleccione una opción</option>
        <option value="1">Sistemas</option>
        <option value="2">Contaduría</option>
        <option value="3">Recursos Humanos</option>
    </select><br><br>

    <input type="submit" value="Registrar">
</form>
