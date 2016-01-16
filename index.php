<?php 
    /*  
	*/

//require_once("./login/login.php");
require_once("./configuraciones/globales.php");
require_once(OBIB_CONF."conectar.php");
//require_once("./configuraciones/conectar.php");

//require_once("./popupmsg/popup.class.php");
session_start(); //jalg 3-2015
header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT"); //la pagina expira en una fecha pasada
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
header ("Pragma: no-cache");

/*
Lanza un pop
$msg2 = new popupMsg (150,30,450,100,"CodeKa Mx version 16 Mod-02","Este programa sera enviado a quien lo solicite en el Foro de la pagina WEB a contar del dia 21 de Noviembre 2010...","OK",12000);
$msg2->populateHTML();
$msg2->PrintMsg();
*/

// Normal Usage  , with time out.
$HeadlineStyleArr["text-align"] = "left";
$HeadlineStyleArr["color"] = "purple"; 
$HeadlineStyleArr["background-color"] = "silver";
$HeadlineStyleArr["font-style"] = "italic";
$HeadlineStyleArr["font-family"] = "arial, sans-serif";
$MessageStyleArr["border"] = "black 8px solid";
$MessageStyleArr["filter"] =  "alpha(opacity=80)"; // IE
$MessageStyleArr["moz-opacity"] = 0.8;  //FF
$MessageStyleArr["opacity"] = 0.8;    // FF
$TextStyleArr["text-align"] = "center";
$TextStyleArr["color"] = "silver"; 
$TextStyleArr["background-color"] = "purple";
$TextStyleArr["font-weight"] = "bold";
$TextStyleArr["font-family"] = "arial, sans-serif";


//    <link href="estilos/boot-----strap------.css" rel="stylesheet"  type="text/css">
?>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="images/logo.ico" rel="shortcut icon">
  <title>MaxCodeKaRev - Gestion de Ventas de Entorno Web</title>
  <script type="text/javascript" src="menu/JSCookMenu.js"></script>
  <link rel="stylesheet" href="menu/theme.css" type="text/css">
  <script type="text/javascript" src="menu/theme.js"></script>
  <script type="text/javascript">
<!---
var MenuPrincipal = [
	[null,'Inicio',null,null,'Inicio',
		[null,'Reloj','./funciones//reloj/ureloj.php','principal','Reloj'],
		[null,'Calculadora','./funciones/calculadora/ucalculadora.php','principal','Calculadora'],
		_cmSplit,
		[null,'Salir','./configuraciones/salir.php','principal','Salir']
	],
	[null,'Inter. Comerciales',null,null,'Ventas clientes',
		[null,'Proveedores','./proveedores/index.php','principal','Proveedores'],
		[null,'Clientes','./clientes/index.php','principal','Clientes']
	],
	[null,'Productos',null,null,'Productos',
		[null,'Articulos','./articulos/index.php','principal','Articulos'],
		[null,'Familias','./familias/index.php','principal','Familias']
	],
	[null,'Ventas clientes',null,null,'Ventas clientes',
		[null,'Ventas Mostrador','./ventas_mostrador/index.php','principal','Ventas Mostrador'],
		[null,'Facturas de Ventas','./facturas_clientes/index.php','principal','Facturas'],
		[null,'Ordenes de salida','./albaranes_clientes/index.php','principal','Guia despacho'],
		[null,'Facturar Guia despacho ventas','./lote_albaranes_clientes/index.php','principal','Facturar Guia despacho']
	],
	[null,'Compras proveedores',null,null,'Compras proveedores',
		[null,'Facturas de Compras','./facturas_proveedores/index.php','principal','Proveedores'],
		[null,'Recepcion de mercancia','./albaranes_proveedores/index.php','principal','Guia despacho'],
		[null,'Facturar Guia despacho a proveedores','./lote_albaranes_proveedores/index.php','principal','Facturar Guia despacho']
	],
	[null,'Tesoreria',null,null,'Tesoreria',
	    [null,'Cobros','./cobros/index.php','principal','Cobros'],
		[null,'Pagos','./pagos/index.php','principal','Pagos'],
		[null,'Caja Diaria','./cerrarcaja/index.php','principal','Caja Diaria'],
		[null,'Libro Diario','./librodiario/index.php','principal','Libro Diario'],
		_cmSplit,
		[null,'Reportes',null,null,'Reportes',
			[null,'Costo Articulos en Stock','./funciones/fpdf/articulos_costo.php','principal','Costo Articulos en Stock'],
			[null,'Productos Stock negativo','./funciones/fpdf/stocks_negativo.php','principal','Productos Stocks negativos'],
			[null,'Productos stocks minimo','./funciones/fpdf/stocks_minimo.php','principal','Productos stocks minimo'],
			[null,'Precios Netos Tienda','./funciones/fpdf/articulos_venta.php','principal','Precios Netos Tienda']
	]	
	],
	[null,'Mantenimientos',null,null,'Mantenimientos',
		[null,'Etiquetas','./etiquetas/index.php','principal','Etiquetas'],
		[null,'Optimizar el sistema','./optimizar/index.php','principal','Optimizar el sistema'],
		[null,'Parametros del Sistema','./parametros/parametros.php','principal','Parámetros del Sistema'],
//		[null,'Diseño documentos','./disenodoc/disenodocumentos.php','principal','Diseño documentos'],
		_cmSplit,
		[null,'Tablas',null,null,'Tablas',
			[null,'Impuestos','./impuestos/index.php','principal','Impuestos'],
//			[null,'Monedas','./impuestos/monedasnew.php','principal','Monedas'],
	    	[null,'Entidades bancarias','./entidades/index.php','principal','Entidades bancarias'],
		    [null,'Ubicaciones','./ubicaciones/index.php','principal','Ubicaciones'],
		    [null,'Embalajes','./embalajes/index.php','principal','Embalajes'],
			[null,'Provincias','./provincias/index.php','principal','Provincias'],
			[null,'Vendedores','./vendedores/index.php','principal','Vendedores'],
			[null,'Cobradores','./cobradores/index.php','principal','Cobradores'],
		    [null,'Formas de pago','./formaspago/index.php','principal','Formas de pago']
	]
	],
	[null,'Copias Seguridad',null,null,'Copias de Seguridad',
		[null,'Hacer copia','./backup/hacerbak.php','principal','Hacer copia'],
		[null,'Restaurar copia','./backup/restaurarbak.php','principal','Restaurar copia']
	],
	[null,'Ayuda',null,null,'Ayuda',
		[null,'Manual Conexion Hosting remoto','./servidor_remoto/manual_rem.php','principal','Manual Hosting Remoto'],
		[null,'Manual Conexion Hosting Local ','./servidor_local/manual_local.php','principal','Manual Hosting Local'],
		_cmSplit,
		[null,'Acerca de ....','doc/creditos.php','principal','Acerca de ....']
	]
];
-->
</script>

  <style type="text/css">
  body {
	font:Arial;
  	background-color: rgb(255, 255,255);
    background-image: url(images/superior.png);
    background-repeat: no-repeat;
	margin: 0px;
    }

  #MenuAplicacion { 
    margin-left: 10px;
    margin-top: 0px;
    }
  </style>

</head>

<body>
	
	<div align="center">
		<a href="http://maxcodekarev.sourceforge.net/" style="font:Verdana; text-decoration:none; color:#000000; font-weight:bold; margin:-10px 0 10px 0;">MaxCodeKaRev-1.0-Beta</a>
		<a href="http://maxcodekarev.sourceforge.net/" style="margin:0 0 0 680px"><img src="images/maxchico.jpg" alt="MaxCode" width="31" height="30" border="0" longdesc="Aplicaciones Web" style="margin:6px 0 0 0;"></a>
	</div>
	<div id="MenuAplicacion" align="center"></div>

<script type="text/javascript">
<!--
	cmDraw ('MenuAplicacion', MenuPrincipal, 'hbr', cmThemeGray, 'ThemeGray');
-->
</script>
	<iframe src="./configuraciones/centralinicial.php" name="principal" title="principal" width="100%" height="1050px" frameborder=0 scrolling="no" style="margin-left: 0px; margin-right: 0px; margin-top: 2px; margin-bottom: 0px;">
</iframe>
</body>
</html>
