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
	
		Autores: Galopin
		     Pedro Obregón Mejías
			 Rubén D. Mancera Morán
			 	 Factusyn
			 Luis Ignacio Albacete

	Fecha Liberación del código: 16/10/2007
	Factusyn 2007 -- Murcia	
			 
	
	*/

?>
<html>
<head>
<title>Factusyn</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo6 {font-size: 0.9em}
-->
</style>
</head>
<? include ("../configuraciones/conectar.php"); ?>
<body>
<br>

<table width="50%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#333333" class="metal">
  <tr> 
    <td class="barraroja">Usuario</td>
    <td class="barraroja">Nombre Real</td>
	<td width="15%" class="barraroja">Tipo</td>
	<td width="8%" class="barraroja">Mostrar</td>
    <td width="8%" class="barraroja">Modificar</td>
    <td width="8%" class="barraroja">Eliminar</td>
  </tr>
  <? 
//consultamos la tabla de usuarios  
$consulta = "select * from user_list order by id";
$resultado = mysql_query($consulta, $conexion);
while ($usuarios=mysql_fetch_array($resultado)) { 
$id=$usuarios["ID"];

$consulta1 = "select * from operarios where codoperario=$id";
$resultado1 = mysql_query($consulta1, $conexion);
$operarios=mysql_fetch_array($resultado1);
$codo=$operarios["codoperario"];

$usuario=$usuarios["usuario"];
$nombre=$operarios["nombre"];

if (empty ($codo["codoperario"])) { $nombre="Sin datos"; $nivel="Piltrafa"; }


//definimos el nombre segun el codigo de acceso
 if ($usuarios[nivel_acceso]=="0") $nivel="Administrador";
  if ($usuarios[nivel_acceso]=="1") $nivel="Usuario";
   if ($usuarios[nivel_acceso]=="2") $nivel="Asesoria";
    if ($usuarios[nivel_acceso]=="3") $nivel="Comercial";
	  if ($usuarios[nivel_acceso]=="4") $nivel="Cliente";

 ?>
  <tr class="rayitas">
    <td class="metal"><? echo $usuario; ?></span></td> 
    <td class="metal"><? echo $nombre; ?></span></td>
	<td class="metal"><? echo $nivel; ?></span></td>
	<td>
	<div align="center">
    <form name="form2" method="post" action="mostrar_usuario.php">
        <input type="submit" name="Submit2" value="Mostrar">   
        <input type="hidden" name="cod" value="<? echo $id; ?>">
        <input type="hidden" name="ini" value="0">
        </div>
    </form>
	<td>
	<div align="center">
    <form name="form2" method="post" action="modificar_usuario.php">
        <input type="submit" name="Submit2" value="Modificar">   
      <input type="hidden" name="cod" value="<? echo $id; ?>">
        <input type="hidden" name="ini" value="0">
        </div>
    </form>
	<td>
	 
    <form name="form3" method="post" action="confirmar_eliminar_usuario.php">
	  <input type="hidden" name="ini" value="0">
      <input type="hidden" name="cod" value="<? echo $id; ?>">
      <input type="hidden" name="id" value="<? echo $id; ?>">
       <div align="center">
	  <input type="submit" name="Submit2" value="Eliminar">
    </td></div>
    </form>
  </tr>
  <? }
 @mysql_free_result($resultado);
  ?>
</table>
<br>
<center>
	 <form action="nuevo_usuario.php" method="post">
        <input name="submit" type="submit" value="Insertar nuevo Usuario">
     </form>
</center>
</body>
</html>