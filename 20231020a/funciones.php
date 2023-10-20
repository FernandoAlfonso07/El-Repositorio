<?php

function consultar() //crea la funcion.
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "select * from usuarios"; //CODIGO SQL en donde insertare datos a la tabla.   
    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= '<b>ID: </b>'. $fila[0]. '<br>';
        $salida .= '<b>NOMBRE: </b>'. $fila[1].'<br>';
        $salida .= '<b>SITIO WEB: </b>'. $fila[2].'<br>';
    }

    $conexion->close();
    return $salida;
}
