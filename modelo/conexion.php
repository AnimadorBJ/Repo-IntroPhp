<?php
    // scrip para crear una coneccion con la BD

    // parametros requeridos para la coneccion con la BD

    // parametros para la BD local q
    /*DEFINE('USER', 'root'); // Se Crea la constante USER con valor "root"
    DEFINE('PW', '');
    DEFINE('HOST', 'localhost');
    DEFINE('BD', 'Ejercicio 2 consultas SQL');*/

    // parametro BD remoto(infinityfree)
    DEFINE('USER', 'if0_38542111'); // Se Crea la constante USER con valor "if0_38542111"
    DEFINE('PW', 'mahepi0706');
    DEFINE('HOST', 'sql306.infinityfree.com');
    DEFINE('BD', 'if0_38542111_bd_empresa');

    // conexion con la BD

    $conexion = mysqli_connect(HOST, USER, PW, BD);

    // Establecer concunto de caracter para el hosting
    mysqli_set_charset($conexion, "utf8mb4");

    // verificar la conexion con la BD
    if(!$conexion)
    {
        die('la conexion con la BD fallo: ' + mysqli_error($conexion));
        exit();
    }
    /*else
    {
        die('Conexion exitosa a la BD exitosa!');
    }*/
?>
