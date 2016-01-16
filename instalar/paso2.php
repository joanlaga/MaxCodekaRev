<?php 
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "</br>";
*/

	global $DBhostname;
	global $DBusername;
	global $DBpassword;
	global $DBname;
?>
<html>
<head>
<title>MaxCodecaRev 1.00</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php  

$mensaje="";

function crear_db($DBname, $sqlfile='MaxCodecaRev.sql') {
	mysql_select_db($DBname);
	$mqr = @get_magic_quotes_runtime();
	@set_magic_quotes_runtime(0);
	$query = fread(fopen("./".$sqlfile, "r"), filesize("./".$sqlfile));
	@set_magic_quotes_runtime($mqr);
	$pieces  = split_sql($query);
	$errors = array();
	for ($i=0; $i<count($pieces); $i++) {
		$pieces[$i] = trim($pieces[$i]);
		if(!empty($pieces[$i]) && $pieces[$i] != "#") {
			if (!$result = mysql_query ($pieces[$i])) {
				$errors[] = array ( mysql_error(), $pieces[$i] );
			}
		}
	}
}
#fix falla el ereg
function split_sql($sql) {
	$sql = trim($sql);
//	$sql = ereg_replace("\n#[^\n]*\n" , "\n", $sql);
//	$sql = preg_match( "/\n/", $sql); //jalg 2015-3
//echo "</br>";
//echo $sql;
//echo "</br>";
	/*
	ejemplo de cambio de ereg
ereg('\.([^\.]*$)', $this->filename, $extension);
reemplazarla por:

preg_match('/\.([^\.]*$)/', $this->filename, $extension);
*/

	$buffer = array();
	$ret = array();
	$in_string = false;

	for($i=0; $i<strlen($sql)-1; $i++) {
		if($sql[$i] == ";" && !$in_string) {
			$ret[] = substr($sql, 0, $i);
			$sql = substr($sql, $i + 1);
			$i = 0;
		}

		if($in_string && ($sql[$i] == $in_string) && $buffer[1] != "\\") {
			$in_string = false;
		}
		elseif(!$in_string && ($sql[$i] == '"' || $sql[$i] == "'") && (!isset($buffer[0]) || $buffer[0] != "\\")) {
			$in_string = $sql[$i];
		}
		if(isset($buffer[1])) {
			$buffer[0] = $buffer[1];
		}
		$buffer[1] = $sql[$i];
	}

	if(!empty($sql)) {
		$ret[] = $sql;
	}
	return($ret);
}
$DBhostname ="";
$DBusername ="";
$DBpassword ="";
$DBname  	="";

@$DBhostname = trim($_POST[DBhostname]);
@$DBusername = trim($_POST[DBusername]);
@$DBpassword = trim($_POST[DBpassword]);
@$DBname  	= trim($_POST[DBname]);

$correcto="si";

if (!($mysql_link = @mysql_connect( $DBhostname, $DBusername, $DBpassword ))) {
		$mensaje= "El usuario y la clave introducida son incorrectos<br>";
		$correcto="no"; }
if($DBname == "") {
		$mensaje=$mensaje."El nombre de la base de datos est� vacio<br>";
		$correcto="no";
	}
if ($correcto=="si") {
	$var=$DBname.".*";
	$var2=$DBusername."@".$DBhostname;
	$consulta2="GRANT ALL PRIVILEGES ON $var TO $var2 IDENTIFIED BY $DBpassword WITH GRANT";
	$query2=mysql_query($consulta2);
	$consulta = "CREATE DATABASE $DBname";
	$query = mysql_query($consulta);
	$test = mysql_errno();

	if ($test <> 0 && $test <> 1007) {
		$mensaje= $mensaje."Error creando la base de datos. Error no: ".$test."<br>";
		$correcto="no";
	}
	if ($correcto=="si")	{
		
		crear_db($DBname,'MaxCodecaRev.sql');
		$mensaje=$mensaje."La instalación de MaxCodecaRev 1.0 se ha realizado con éxito. El administrador inicial tiene como nombre admin y como clave admin";
		$fp = fopen("../config.php", "w"); 
		if (!$fp)
			die(" ERROR: No se tiene acceso a fichero de configuracion: config.php. Instalación a medias");
		$usuname="MaxCodecaRev";
		$tbname="user_list";

		fputs ($fp, "<?php \r\n");
		fputs ($fp, "ob_start(); \r\n");//jalg
		fputs ($fp, "\r\n");
		fputs ($fp, "global \$Usuario;\r\n");
		fputs ($fp, "global \$Password;\r\n");
		fputs ($fp, "global \$Servidor; \r\n");
		fputs ($fp, "global \$BaseDeDatos;\r\n");
		fputs ($fp, "\r\n");
		fputs ($fp, "\$Usuario=\"$DBusername\";\r\n");
		fputs ($fp, "\$Password=\"$DBpassword\";\r\n");
		fputs ($fp, "\$Servidor=\"$DBhostname\";\r\n"); 
		fputs ($fp, "\$BaseDeDatos=\"$DBname\";\r\n");
		fputs ($fp, "\r\n");
		fputs ($fp, "\$usuarios_sesion=\"$usuname\";\r\n");
		fputs ($fp, "\$sql_tabla=\"$tbname\";\r\n");
		fputs ($fp, "\r\n");		
		fputs ($fp, "ob_end_clean(); \r\n");//jalg 
		fputs ($fp, "?>\r\n"); 
		fclose($fp);
		
//		chmod("../config.php",0777);
/*		
		$fp = fopen("../funciones/calendario/includes/settings.php", "w"); 
		if (!$fp)
			die(" ERROR: No se tiene acceso a fichero de configuracion del calendario: settings.php. Instalaci�n a medias");

		$usuname="MaxCodecaRev";
		$tbname="user_list";
		fputs ($fp, "<?php \r\n"); 
		fputs ($fp, "db_type: mysql\r\n");
		fputs ($fp, "db_host: $DBhostname \r\n");
		fputs ($fp, "db_database: $DBname \r\n"); 
		fputs ($fp, "db_login: $DBusername \r\n");
		fputs ($fp, "db_password: $DBpassword \r\n");
		fputs ($fp, "db_persistent: true\r\n");
		fputs ($fp, "single_user_login: admin\r\n");
		fputs ($fp, "readonly: false\r\n"); 
		fputs ($fp, "use_http_auth: false\r\n"); 
		fputs ($fp, "single_user: true\r\n"); 
		fputs ($fp, "user_inc: user.php\r\n"); 
		fputs ($fp, "?>\r\n"); 

		fclose($fp);
		chmod("../funciones/calendario/includes/settings.php",0777);
	} 	else 	{
		$mensaje= $mensaje."Error la base de datos ya existe. Error n�: ".$test."<br>";
		$correcto="no";
	}
	*/
	}}	
?>


<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br>
<table width="761" height="588" border="0" align="center" cellpadding="0" cellspacing="0" background="images/datos.jpg">
  <tr>
    <td width="65%">
	<center>
	  <p><font size="+2">
	    <?php  print $mensaje; 
	if ($correcto=="no") { ?> 
		<br>
		<a href="paso1.php">Atrás</a></font> 
	      <?php  }
	  if ($correcto=="si") { ?>
	      <br>
	    </p>
	  <p>Recuerda usar el asistente de instalación la primera vez que uses MaxCodecaRev.</p>
	  <p>&nbsp;</p>
	  <p>lo encontraras en el menu / utilidades / configuraciones / asistente<br>
	    
	    <?php  }?>

<a href="paso3.php">Continuar</a>

	    </p>
	</center>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>