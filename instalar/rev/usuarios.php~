<?php 
require("../configuraciones/aut_verifica.inc.php"); // incluir motor de autentificaci�n.
$nivel_acceso=0; // definir nivel de acceso para esta p�gina.
if ($nivel_acceso < $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}

require ("../configuraciones/config.php"); // incluir configuracion.
$pag=$_SERVER['PHP_SELF'];  // el nombre y ruta de esta misma p�gina.

function cabeceraHTML(){
echo <<< HTML
<html>
<head>
<title>Gesti�n Usuarios - Factusyn</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body topmargin="0" leftmargin="0">

  <br>
  <br>
  <center>
  </center>
  <br>
</div>
HTML;
}


if (isset($_GET['error'])){

$error_accion_ms[0]= "No se puede borrar el Usuario, debe existir por lo menos uno.<br>Si desea borrarlo, primero cree uno nuevo.";
$error_accion_ms[1]= "Faltan Datos.";
$error_accion_ms[2]= "Passwords no coinciden.";
$error_accion_ms[3]= "El Nivel de Acceso ha de ser num�rico.";
$error_accion_ms[4]= "El Usuario ya est� registrado.";

$error_cod = $_GET['error'];

echo "<div align='center'><font color='cc0000'>��� $error_accion_ms[$error_cod] ���</font></div><br>";

}

$db_conexion= mysql_connect("$Servidor", "$Usuario", "$Password") or die("No se pudo conectar a la Base de datos") or die(mysql_error());
mysql_select_db("$BaseDeDatos") or die(mysql_error());

if (!isset($_GET['accion'])){

$usuario_consulta = mysql_query("SELECT ID,usuario,nivel_acceso FROM $sql_tabla") or die("No se pudo realizar la consulta a la Base de datos");

cabeceraHTML();

echo <<< HTML
<table align="center">
  <tr>
    <td colspan="4" class="primeralinea">
      <div align="center">
        Gesti&oacute;n de Usuarios :</b></font><br>
    </td>
  </tr>
  <tr>
    <td width="14%" class="segundalinea">
      <div align="center"><b>ID</div>
    </td>
    <td width="30%" class="segundalinea">
      <div align="center"><b>Usuario</b></div>
    </td>
    <td width="24%" class="segundalinea">
      <div align="center"><b>Nivel  (0 Administrador - 1 Usuario)</b></div>
    </td>
    <td width="32%" class="segundalinea">
    <div align="center"><a href="$pag?accion=nuevo"><b>Registrar usuario</b></a></div></td>
  </tr>

HTML;

while($resultados = mysql_fetch_array($usuario_consulta)) {

echo <<< HTML
<tr>
    <td width="14%" class="segundalinea">$resultados[ID]</td>
    <td width="30%" class="segundalinea">$resultados[usuario]</td>
    <td width="24%" class="segundalinea">$resultados[nivel_acceso]</td>
    <td width="32%" class="segundalinea"> <a href="$pag?accion=borrar&id=$resultados[ID]">Borrar</a>
        | <a href="$pag?accion=nivel&id=$resultados[ID]">Nivel acceso  (0 Administrador - 1 Usuario)</a></div>
    </td>
  </tr>
HTML;
}
echo "</table>";
mysql_free_result($usuario_consulta);
mysql_close();
}

if (isset($_GET['id'])){

if ($_GET['accion']=="borrar"){
$usuarios_consulta = mysql_query("SELECT ID FROM $sql_tabla") or die(mysql_error());
$total_registros = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_registros == 1){
header ("Location: $pag?error=0");
exit;
}

$id_borrar= $_GET['id'];
mysql_query("DELETE FROM $sql_tabla WHERE id=$id_borrar") or die(mysql_error());
mysql_close();

header ("Location: $pag");
exit;

}

if ($_GET['accion']=="nivel"){

cabeceraHTML();

$id_mod_nivel= $_GET['id'];
$usuario_consulta = mysql_query("SELECT ID,usuario,nivel_acceso FROM $sql_tabla WHERE id=$id_mod_nivel") or die("No se pudo realizar la consulta a la Base de datos");

while($resultados = mysql_fetch_array($usuario_consulta)) {

echo <<< HTML
<form method="post" action="$pag?accion=editarnivel">
<input type="hidden" name="id" value="$resultados[ID]">
<table align="center">
    <tr>
      <td colspan="2" height="30" class="primeralinea">
        <div align="center"><b>.:
          Modificar Nivel Acceso Usuario :.</font></b></div>
      </td>
    </tr>
    <tr>
      <td width="185" class="segundalinea">
        <div align="right">Usuario
          :</div>
      </td>
      <td width="192" class="segundalinea"><b>$resultados[usuario]
        </font></b></td>
    </tr>
    <tr>
      <td width="185" class="segundalinea"><div align="right">Nivel
        Acceso actual  (0 Administrador - 1 Usuario): </div></td>
      <td width="192"><b><div align="center">$resultados[nivel_acceso]</div></b></td>
    </tr>
    <tr>
      <td width="185" class="segundalinea">
        <div align="right">Nuevo
          Nivel de Acceso (0 Administrador - 1 Usuario): </div>
      </td>
      <td width="192" class="segundalinea"><b>
        <input type="text" name="nuevonivelacceso" class="imputbox" size="4" maxlength="4">
        </font></b></td>
    </tr>
    <tr>
      <td colspan="2" height="40" class="segundalinea">
        <div align="center">
          <input type="submit" name="Submit" value="  Actualizar  " class="botones" >
        </div>
      </td>
    </tr>
  </table>
</form>
HTML;
}
mysql_free_result($usuario_consulta);
mysql_close();
}

}

if ($_GET['accion']=="editarnivel"){

$id=$_POST['id'];
$nivelnuevo=$_POST['nuevonivelacceso'];

if ($nivelnuevo==""){
header ("Location: $pag?accion=nivel&id=$id&error=1");
exit;
}

mysql_query("UPDATE $sql_tabla SET nivel_acceso='$nivelnuevo' WHERE ID=$id") or die(mysql_error());
mysql_close ();
header ("Location: $pag");
exit;
}



if ($_GET['accion']=="nuevo"){

cabeceraHTML();

echo <<< HTML
<form method="post" action="$PHP_SELF?accion=hacernuevo">

  <table align="center">
    <tr>
      <td colspan="2" height="30" class="primeralinea">
        <div align="center"><b>.:
          Registro de Usuarios :.</b></div>
      </td>
    </tr>
    <tr>
      <td width="158" class="segundalinea">
        <div align="right">Usuario
          : </div>
      </td>
      <td width="170" class="segundalinea"><b>
        <input type="text" name="usuarionombre" class="imputbox" maxlength="15">
        </b></td>
    </tr>
    <tr>
      <td width="158" class="segundalinea">
        <div align="right">Password
          : </div>
      </td>
      <td width="170" class="segundalinea"><b>
        <input type="password" name="password1" class="imputbox" maxlength="15">
        </b></td>
    </tr>
    <tr>
      <td width="158" class="segundalinea">
        <div align="right">Password
          (repitalo) : </div>
      </td>
      <td width="170" class="segundalinea"><b>
        <input type="password" name="password2" class="imputbox" maxlength="15">
        </b></td>
    </tr>
    <tr>
      <td width="158" class="segundalinea">
        <div align="right">Nivel
          de Acceso  (0 Administrador - 1 Usuario): </div>
      </td>
      <td width="170" class="segundalinea"><b>
        <input type="text" name="nivelacceso" class="imputbox" size="4" maxlength="4">
        </b></td>
    </tr>
    <tr>
      <td colspan="2" height="40" class="segundalinea">
        <div align="center">
          <input type="submit" name="Submit" value="  Registrar  " class="botones" >
        </div>
      </td>
    </tr>
  </table>
</form>
HTML;
}

if ($_GET['accion']=="hacernuevo"){

$usuario=$_POST['usuarionombre'];
$pass1=$_POST['password1'];
$pass2=$_POST['password2'];
$nivel=$_POST['nivelacceso'];


if ($pass1=="" or $pass2=="" or $usuario=="" or $nivel=="") {
header ("Location: $pag?accion=nuevo&error=1");
exit;
}

if ($pass1 != $pass2){
header ("Location: $pag?accion=nuevo&error=2");
exit;
}

if (!eregi("[0-9]",$nivel)){
header ("Location: $pag?accion=nuevo&error=3");
exit;
}

$usuarios_consulta = mysql_query("SELECT ID FROM $sql_tabla WHERE usuario='$usuario'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {
header ("Location: $pag?accion=nuevo&error=4");
exit;
}

$usuario=stripslashes($usuario);
$pass1 = md5($pass1);
mysql_query("INSERT INTO $sql_tabla values('','$usuario','$pass1','$nivel')") or die(mysql_error());
mysql_close();

header ("Location: $pag");
exit;


}

?>
<p>
</p>
<p>
</p>
</BODY>
</HTML>

