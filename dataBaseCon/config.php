<?php
/* Establecemos las variables de session para realizar la conexion a la base de
datos principal en la que se almacenan los usuarios y las empresas registradas
Autor: Guadalupe Garza Moreno
Fecha: 24 Septimbre del 2015
*/
if(!session_id()){
    session_start();
}

$_SESSION['_MAIN_HOST'] = "192.168.1.1" // Nombre o IP del Servidor MySQL
$_SESSION['_MAIN_USR'] = "facturacion" // Nombre del Usuario MySQL
$_SESSION['_MAIN_PWD'] = "facturacion" // Contraseña del Usuario MySQL
$_SESSION['_MAIN_DB'] = "facturacion_cfdi" // Nombre de la Base de Datos MySQL
$_SESSION['_MAIN_PORT'] = "3306" // Puerto para la conexion a MySQL

 ?>
