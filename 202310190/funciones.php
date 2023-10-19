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
    //Recorre el recordset.
    while ($fila = mysqli_fetch_assoc($resultado)) {

        $salida = $fila['suma'];
    } // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    return $salida; //RETORNA LA FUNCION.


}
function conectar2()
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO

    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "select 10 as n1,";
    $sql .= " 20 as n2"; //Concatena las lineas de SQL.
    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    //Recorre el recordset.
    while ($fila = mysqli_fetch_assoc($resultado)) {

        $salida = $fila['n1'];
        $salida += $fila['n2']; //SUMA las filas con "+".
    } // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    return $salida; //RETORNA LA FUNCION.


}
function conectar3()
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $edadM1 = 'Mayor de edad con ';
    $edadM2 = 'Menor de edad con ';
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "select 21 as edad"; //CODIGO SQL.

    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    //Recorre el recordset.
    while ($fila = mysqli_fetch_assoc($resultado)) {

        $salida = $fila['edad'];

        if ($salida >= 18) {
            $salida =  $edadM1 . $salida; //Cancadena texto con variables.
        } else {
            $salida =   $edadM2 . $salida;
        } //Descicion de edad < 0 >.
    } // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    return $salida; //RETORNA LA FUNCION.


}

function CONTARusuarios()
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "select count(*) as contar from usuarios"; //CODIGO SQL en donde cuenta los usuairos que ha en esa base de datos.

    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    //Recorre el recordset.
    while ($fila = mysqli_fetch_assoc($resultado)) {

        $salida = $salida. 'Hay '.$fila['contar']. ' usuarios'; 

    } // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    return $salida; //RETORNA LA FUNCION.


}
