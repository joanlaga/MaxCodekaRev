<link href="../css/estilo.css" rel="stylesheet" type="text/css">	
<?php 
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

	if ($foto=="") { 
$consulta = "UPDATE `docalbaran` SET color='$color' , marcaguay='$marcaguay' , marcaguax='$marcaguax' , tamanologo='$tamanologo' , logoy='$logoy' , logox='$logox' , marcaguatam='$marcaguatam' , condiciones='$condiciones' , conditam='$conditam' , condifont='$condifont' , moneda='$moneda' , impuestos='$impuestos' , alineacion='$alineacion' , albaran='$albara'";
} else { 

$consulta = "UPDATE `docalbaran` SET color='$color' , marcaguay='$marcaguay' , marcaguax='$marcaguax' , tamanologo='$tamanologo' , logoy='$logoy' , logox='$logox' , marcaguatam='$marcaguatam' , condiciones='$condiciones' , conditam='$conditam' , condifont='$condifont' , moneda='$moneda' , impuestos='$impuestos' , alineacion='$alineacion' , marcagua='$foto_name' , albaran='$albara'";
}
$resultado = mysql_query($consulta, $conexion);

//guardamos la imagen el la carpeta de imagenes
				
				if ($foto_name<>"none")
				 {
			       if (! copy ($foto, "imagenes/logo/magua/".$foto_name)) 
		            {
		              echo "<h2>��� No ha seleccionado ning�n Fondo ���</h2>\n";
			        };
				};


                  //
				  //mostramos el mensaje de errores
				  //
				  $loguito="logo.jpg";
                  $cabecera="documentos.png";
                  $texto="Dise�o de Albaran modificado correctamente";
				
                  $actionimp="";
                  $namevar="";
                  $valuevar=$id;				
                  $valueimp="";
				
                  $actionv="disenodocumentos.php";
                  $valuev="Modificacion de Dise�o Albaran";
                  include ("../configuraciones/mensaje.php");		
?>				  