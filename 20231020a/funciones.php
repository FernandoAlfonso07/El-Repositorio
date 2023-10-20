<?php
/*
*   Esta funcion se encarga de consultar los datos de la tabla de usuarios.
*   @param_id es un parametro opcional.
*   @param_c es un parametro opcional de contraseña.
*   @return Retorna la salida.
*/
function consultar($id = null, $c = null) //crea la funcion.
{
    $salida = ''; //Inicializa variable TEXTO o NUMERO
    $conexion = mysqli_connect("localhost", "root", "root", "bd_ejercicio_estudiantes1"); //Conectar con base de datos
    $sql = "select * from usuarios"; //CODIGO SQL en donde insertare datos a la tabla.   
    if ($id != null) $sql .= " where id_U = '$id' "; //Conecto por medio de una descicion una segunda funcion de un solo registro.
    if ($c != null) $sql .= " and contraseña = '$c'"; //incluye si se usa la contraseña o no.
    
     //Conecto por medio de una descicion una segunda funcion de un solo registro.
    $resultado = $conexion->query($sql); //Ejecutar lo que se pida en el sql.

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= '<b>ID: </b>' . $fila[0] . '<br>'; //Concateno y muestra la linea deseada.
        $salida .= '<b>NOMBRE: </b>' . $fila[1] . '<br>'; //Concateno y muestra la linea deseada.
        $salida .= '<b>SITIO WEB: </b>' . $fila[2] . '<br>'; //Concateno y muestra la linea deseada.
    }

    $conexion->close(); //cierra la conexion.
    return $salida;
}
