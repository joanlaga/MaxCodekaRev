<link href="../estilo.css" rel="stylesheet" type="text/css">	
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

	Fecha Liberaci�n del c�digo: 07/10/2007
	Factusyn 2007 -- Murcia	
	
	*/
	
include ("../conectar.php");
				  
$consulta = "INSERT INTO `tiendainfo` ( `alto` , `bajo` , `foto` ) 
VALUES ('$uno' , '$dos' , '$foto' )";
$resultado = mysql_query($consulta, $conexion);

//guardamos la imagen el la carpeta de imagenes

			//si modifica foto, la subimos a la carpeta de imagenes
				if ($foto_name>"")
				 {
			       if (! copy ($foto, "../imagenes/tienda/".$foto_name)) 
		            {
		              echo "<h2>No se ha podido copiar el archivo</h2>\n";
			        };
					};

                  //
				  //mostramos el mensaje de errores
				  //
				  $loguito="logo.jpg";
                  $cabecera="tienda.png";
                  $texto="Informacion A�adida perfectamente";
				
                  $actionimp="";
                  $namevar="";
                  $valuevar=$id;				
                  $valueimp="";
				
                  $actionv="laterales.php";
                  $valuev="Administraci�n de Tienda";
                  include ("../mensaje.php");		


?>
