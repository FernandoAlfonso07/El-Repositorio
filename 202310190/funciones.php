<?php

function consulta()
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO

    $salida = 10 * 2 / 2; //calcula el área de un triangulo    

    return $salida; //RETORNA LA FUNCION
}
function calcular()
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO

    $salida = 5 + 4; //calcula una suma

    return $salida; //RETORNA LA FUNCION
}
function conectar()
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO

    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "select 2+1 ";
    $sql .= "as suma"; //Concatena las lineas de SQL.
    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    while ($fila = mysqli_fetch_assoc($resultado)) {

        $salida = $fila['suma'];
    } // Mostrar SQL
    
    return $salida; //RETORNA LA FUNCION
}
