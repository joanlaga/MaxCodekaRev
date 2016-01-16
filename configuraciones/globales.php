<?php

/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo OBIB_CONF;
*/

//Facilita el uso de directorios
define("OBIB_SITE",'/git/maxcodekarev/');
define("OBIB_ROOT",$_SERVER['DOCUMENT_ROOT']);
define("OBIB_IMG",OBIB_ROOT.OBIB_SITE."images/");
define("OBIB_CONF",OBIB_ROOT.OBIB_SITE."configuraciones/");
define("OBIB_FUN",OBIB_ROOT.OBIB_SITE."funciones/");


define("OBIB_VER","1.0");

//Usadas en reportes PDF
define("OBIB_LEY",'MaxCodeKaRev - Sistema de Control para Gestion de Ventas en entorno Web, Ver 1.0.0-Beta - 2016');//usted puede modificar esto, con ello cambia el pie de pagina de los reportes
define("OBIB_LOGO",OBIB_ROOT.OBIB_SITE.'logo.jpg');//usted puede modificar esto, con ello cambia el l de los reportes

