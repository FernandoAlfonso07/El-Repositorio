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

        $salida = $salida . 'Hay ' . $fila['contar'] . ' usuarios';
    } // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    return $salida; //RETORNA LA FUNCION.


}

function InsertarUSUARI0($nombre)
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "insert into usuarios (nombre) values ('$nombre')"; //CODIGO SQL en donde insertare datos a la tabla.    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    //Recorre el recordset.


    try { //ESTO ES PARA EJECUTAR UNA ACCION EN LA BASE DE DATOS ALGO QUE NO SE VE
        //EN ESTE CASO INSERTAR DATOS.

        $resultado = $conexion->query($sql);
    } catch (mysqli_sql_exception $e) {
        //var_dump( $e );
        //echo $e->getMessage(); //Imprimie el error.
    }

    if ($conexion->affected_rows > 0) {

        //echo "Grabado grabado hola";
        $salida = "se inserto correctamente";
    } else {

        //echo "Error error";
        $salida = "Ocurrio un error...";
    }

    // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    //return $salida; //No es necesario porque no tiene WHILE.
}



function borrarUSUARIO($id)
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "delete from usuarios where id_U ='$id';"; //CODIGO SQL en donde insertare datos a la tabla.   
    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    //Recorre el recordset.


    try { //ESTO ES PARA EJECUTAR UNA ACCION EN LA BASE DE DATOS ALGO QUE NO SE VE
        //EN ESTE CASO INSERTAR DATOS.

        $resultado = $conexion->query($sql);
    } catch (mysqli_sql_exception $e) {
        //var_dump( $e );
        //echo $e->getMessage(); //Imprimie el error.
    }

    if ($conexion->affected_rows > 0) {

        //echo "Grabado grabado hola";
        return "Elemento borrado";
    } else {

        //echo "Error error";
        return "Ocurrio un Error...";
    }

    // Mostrar SQL

    //$conexion->close(); //Cierra la conección.

    //return $salida; //No es necesario porque no tiene WHILE.
}


function Actualizar($id, $web)
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "update usuarios set Sitios = '$web' where id_U = '$id';"; //CODIGO SQL en donde insertare datos a la tabla.   
    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    //Recorre el recordset.


    try { //ESTO ES PARA EJECUTAR UNA ACCION EN LA BASE DE DATOS ALGO QUE NO SE VE
        //EN ESTE CASO INSERTAR DATOS.
        $resultado = $conexion->query($sql);

    } catch (mysqli_sql_exception $e) {
        //var_dump( $e );
        //echo $e->getMessage(); //Imprimie el error.
    }

    if ($conexion ->affected_rows > 0) {

        //echo "Grabado grabado hola";
        $salida = 1;
    } else {

        //echo "Error error";
        $salida = 0;
    }

    // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    return $salida; //No es necesario porque no tiene WHILE.
}


function mostrarWeb($id)
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "select Sitios as sitio from usuarios where id_U= '$id';"; //CODIGO SQL mostrar dato de una tabla.  
    $resultado = $conexion->query($sql);

    while ($fila = mysqli_fetch_assoc($resultado)) {

        $salida = $fila['sitio'];
    } // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    return $salida;
}

function IrWen($id) //ESTO LLEVA A QUE VEA EL SITIO DE ALGUIEN
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "select Sitios as sitio from usuarios where id_U= '$id';"; //CODIGO SQL mostrar link de un datos
    $resultado = $conexion->query($sql);

    while ($fila = mysqli_fetch_assoc($resultado)) {

        $salida = "<a href='". $fila['sitio']. "'>";
        $salida .= "Vea mi sitio";
        $salida .= "</a>";
    } // Mostrar SQL

    $conexion->close(); //Cierra la conección.

    return $salida;
}
