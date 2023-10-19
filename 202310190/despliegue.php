<?php
// Se incluye el archivo de funciones. 
include("funciones.php");

echo consulta() . '<br>'; //Invoca la funcion para calcular área triangulo
echo "SUMA:  " . calcular() . '<br>';

echo conectar(). '<br>'; //Invoca la funcion de conectar a una base de datos para sumar
echo conectar2(). '<br>'; //Invoca la funcion de conectar a una base de datos para sumar
