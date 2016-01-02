<link href="../css/estilo.css" rel="stylesheet" type="text/css">	
<?
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

	Fecha Liberación del código: 25/10/2007
	Factusyn 2007 -- Murcia		 
	
	*/

include ("../configuraciones/conectar.php");

if ($foto=="") { 

$consulta = "UPDATE `doclistado` SET color='$color' , marcaguay='$marcaguay' , marcaguax='$marcaguax' , logoy='$logoy' , logox='$logox'  , tamanologo='$tamanologo' , marcaguatam='$marcaguatam' , condiciones='$condiciones' , conditam='$conditam' , condifont='$condifont'";

} else {

$consulta = "UPDATE `doclistado` SET color='$color' , marcaguay='$marcaguay' , marcaguax='$marcaguax' , tamanologo='$tamanologo' , logoy='$logoy' , logox='$logox' , marcaguatam='$marcaguatam' , condiciones='$condiciones' , conditam='$conditam' , condifont='$condifont' , marcagua='$foto_name'";
}
$resultado = mysql_query($consulta, $conexion);

//guardamos la imagen el la carpeta de imagenes
				
				if ($foto_name>"")
				 {
			       if (! copy ($foto, "imagenes/logo/magua/".$foto_name)) 
		            {
		              echo "<h2>¡¡¡ No ha seleccionado ningún Fondo ¡¡¡</h2>\n";
			        };
				};


                  //
				  //mostramos el mensaje de errores
				  //
				  $loguito="logo.jpg";
                  $cabecera="documentos.png";
                  $texto="Diseño de Listados modificado correctamente";
				
                  $actionimp="";
                  $namevar="";
                  $valuevar=$id;				
                  $valueimp="";
				
                  $actionv="disenodocumentos.php";
                  $valuev="Modificacion de Diseño Listados";
                  include ("../configuraciones/mensaje.php");		
?>				  