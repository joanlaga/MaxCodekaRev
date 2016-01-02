<?php 
ob_start(); 

global $Usuario;
global $Password;
global $Servidor; 
global $BaseDeDatos;

$Usuario="root";
$Password="aldico";
$Servidor="localhost";
$BaseDeDatos="maxcodeka";

$usuarios_sesion="MaxCodecaRev";
$sql_tabla="user_list";

ob_end_clean(); 
?>
