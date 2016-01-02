<link href="../css/estilo.css" rel="stylesheet" type="text/css">	
<?php 
require("../configuraciones/aut_verifica.inc.php"); // incluir motor de autentificaci�n.
$nivel_acceso=0; // definir nivel de acceso para esta p�gina.
if ($nivel_acceso < $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
    /*  
  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
	
	Autores: Luis Ignacio Albacete

	Fecha Liberaci�n del c�digo: 25/10/2007
	Factusyn 2007 -- Murcia		 
	
	*/

include ("../configuraciones/conectar.php");

$consulta = "DELETE FROM docfactura";
$resultado = mysql_query($consulta, $conexion);
$consulta = "DELETE FROM docpresupuesto";
$resultado = mysql_query($consulta, $conexion);
$consulta = "DELETE FROM docalbaran";
$resultado = mysql_query($consulta, $conexion);
$consulta = "DELETE FROM docparte";
$resultado = mysql_query($consulta, $conexion);
$consulta = "DELETE FROM doclistado";
$resultado = mysql_query($consulta, $conexion);

if ($foto=="") { 
//insertamos los datos en Facturas
$consulta = "INSERT INTO docfactura (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `registropos` , `alineacion`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$registropos' , '$alineacion')";
$resultado = mysql_query($consulta, $conexion);

//insertamos los datos en presupuestos
$consulta = "INSERT INTO docpresupuesto (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `alineacion`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$alineacion')";
$resultado = mysql_query($consulta, $conexion);

//insertamos los datos en albaranes
$consulta = "INSERT INTO docalbaran (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `alineacion` , `albaran`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$alineacion' , '$albara')";
$resultado = mysql_query($consulta, $conexion);

//insertamos los datos en partes
$consulta = "INSERT INTO docparte (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `alineacion`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$alineacion')";
$resultado = mysql_query($consulta, $conexion);

//insertamos los datos en listados
$consulta = "INSERT INTO doclistado (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `alineacion`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$alineacion')";
$resultado = mysql_query($consulta, $conexion);

} else {

//insertamos los datos en Facturas
$consulta = "INSERT INTO docfactura (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `registropos` , `alineacion` , `marcagua`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$registropos' , '$alineacion' , '$foto_name')";
$resultado = mysql_query($consulta, $conexion);

//insertamos los datos en presupuestos
$consulta = "INSERT INTO docpresupuesto (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `alineacion` , `marcagua`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$alineacion' , '$foto_name')";
$resultado = mysql_query($consulta, $conexion);

//insertamos los datos en albaranes
$consulta = "INSERT INTO docalbaran (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `alineacion` , `albaran` , `marcagua`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$alineacion' , '$albara' , '$foto_name')";
$resultado = mysql_query($consulta, $conexion);

//insertamos los datos en partes
$consulta = "INSERT INTO docparte (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `alineacion` , `marcagua`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$alineacion' , '$foto_name')";
$resultado = mysql_query($consulta, $conexion);

//insertamos los datos en listados
$consulta = "INSERT INTO doclistado (`color` , `marcaguay`, `marcaguax` , `tamanologo` , `logoy` , `logox` , `marcaguatam` , `condiciones`, `conditam` , `condifont` , `moneda` , `impuestos` , `alineacion` , `marcagua`) 
VALUES ('$color' , '$marcaguay' , '$marcaguax' , '$tamanologo' , '$logoy' , '$logox' , '$marcaguatam' , '$condiciones' , '$conditam' , '$condifont' , '$moneda' , '$impuestos' , '$alineacion' , '$foto_name')";
$resultado = mysql_query($consulta, $conexion);


}
//guardamos la imagen el la carpeta de imagenes
				
				if ($foto_name>"")
				 {
			       if (! copy ($foto, "../imagenes/logo/magua/".$foto_name)) 
		            {
		              echo "<h2>��� No ha seleccionado ning�n logotipo ���</h2>\n";
			        };
				};

                  //
				  //mostramos el mensaje de errores
				  //
				  $loguito="logo.jpg";
                  $cabecera="documentos.png";
                  $texto="Documentos Dise�ados correctamente";
				
                  $actionimp="";
                  $namevar="";
                  $valuevar=$id;				
                  $valueimp="";
				
                  $actionv="mail.php";
                  $valuev="Configuracion de servidor mail";
                  include ("../configuraciones/mensaje.php");		
?>				  
