<?
require("../configuraciones/aut_verifica.inc.php"); // incluir motor de autentificación.
$nivel_acceso=0; // definir nivel de acceso para esta página.
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

	Fecha Liberación del código: 01/01/2008
	Factusyn 2008 -- Murcia	
		 
	
	*/
	
?>
<html>
<head>
<title>Factusyn</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<? include("mostrar_usuario.php"); 
$nivel=$_SESSION['usuario_id'];  
if (($id)==($nivel)) {
?>    
	<script language="javascript">
	     alert("Cudiao, Acho, Atencion, Che, Cucha, Quieto, Loco. No te puedes borrar a ti mismo.");
	 </script> 
<? } else { ?>

      <form action="eliminar_usuario.php" method="post">
        <div align="center">
          <input name="submit" type="submit" value="Eliminar Acceso a Usuario">
          <input name="id" type="hidden" value="<? echo $id; ?>">
        </div>
      </form>
<? } ?>      
<br>

</body>
</html>
