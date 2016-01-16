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

    Luis Ignacio Albacete

	Fecha Liberaci�n del c�digo: 01/01/2008
	Factusyn 2008 -- Murcia	
	

	Parche Control NIF/CIF 0.5: Luis Miguel Cabezas Granado
	
	*/
	
$errores="";
if (empty($usuario)) { $errores="Falta por introducir el Usuario.";}

if (empty($password)) { $errores="Falta por introducir la Contrase�a.";}

if (!empty($usuario)or($password)) {
$duplicados_consulta = "select * from user_list where usuario='$usuario'";
$resultado = mysql_query("$duplicados_consulta");
$tota = mysql_num_rows ($resultado);

if ($tota != 0) { $errores="El nombre de usuario ya existe.<br>"; }
}

if ($verifica=="no") { } else {
if (empty($nif)) { } else { 
	//Control del NIF y CIF
	include_once("control_CIF.php");
	$control = f_nifcif_verifica($nif);
	switch ($control) {
		case -1:
			$errores=$errores."El NIF introducido no es correcto.<br>";
			break;
		case -2:
			$errores=$errores."El CIF introducido no es correcto.<br>";
			break;	
		case 0:
			$errores=$errores."Imposible determinar si es un NIF o un CIF.<br>";
			break;
	}
	$consulta = "select * from operarios where nif like '$nif' and codoperario<>'$codcli'";
	$resultado = mysql_query("$consulta");
	$resultado = mysql_num_rows($resultado);
	if ($resultado<>0) { 
		$errores=$errores."Ya existe un Usuario con ese NIF o CIF.<br>";
	}   	
  }
}  
?>
