<?php 
header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT"); //la pagina expira en una fecha pasada
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
header ("Pragma: no-cache");

//subida imagen:
	if (isset($_REQUEST['submit'])) {  
		if(is_uploaded_file($_FILES['foto']['tmp_name'])) { // verifica haya sido cargado el archivo 
			if(move_uploaded_file($_FILES['foto']['tmp_name'], "../fotos/logoempresa.jpg")) { // se coloca en su lugar final 
			} 
		} 
		
//		$codarticulo=$_REQUEST['codigo'];
	    	$foto_name="fotologo".jpg;
		$foto_namea="logoempresa.jpg";
		$foto_nameb="no_img.jpg";
		if (file_exists("../fotos/$foto_namea")) 
		{
			copy ("../fotos/$foto_namea", "../fotos/$foto_name");
			unlink("../fotos/$foto_namea"); 
		} 
	} 
	else  
	{ 
 //       articulo=$_REQUEST["codarticulo"];			
	} 
//-------
?>
<html>
	<head>
		<title>Principal</title>
		<link href="../estilos/estilos.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="../funciones/validar.js"></script>
		<script type="text/javascript">
		
		var cursor;
		if (document.all) {
		// Está utilizando EXPLORER
		cursor='hand';
		} else {
		// Está utilizando MOZILLA/NETSCAPE
		cursor='pointer';
		}
		
		function cancelar() {
			location.href="index.php?cadena_busqueda=<?php echo $cadena_busqueda?>";
		}
		
//Actualizar una vez al cargar página
//script por tunait!
//ver condiciones de uso en http://javascript.tunait.com/
window.onunload = sale;
var valor;
if(document.cookie){
	galleta = unescape(document.cookie)
	galleta = galleta.split(';')
	for(m=0; m<galleta.length; m++){
		if(galleta[m].split('=')[0] == "recarga"){
			valor = galleta[m].split('=')[1]
			break;
		}
	}
	if(valor == "sip"){
		document.cookie = "recarga=nop"; 
		window.onunload = function(){};
		document.location.reload()
	}
	else{
	window.onunload=sale
	}
}
function sale(){
	document.cookie ="recarga=sip"
}
		</script>
	</head>
	<body>
		<div id="pagina">
			
				<div align="center">
				<div id="tituloForm" class="header">INGRESAR LOGO EMPRESA</div>
				<div id="frmimg">
				<form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" align="center"> 
					
					<table>
					  <tr>
						<td width="100%" ><img src="../fotos/foto<?php echo $codarticulo ?>.jpg" width="200px" height="200px" align="center"></td>
					  </tr>
					  <br>
					  <tr>
					  </table>
						<table>
						<td width="45%">Nueva Imagen Logo Empresa [Formato jpg] [100x100]</td>
						<td width="1%"><input id="codigo" name="codigo" value="<?php echo $codarticulo?>" type="hidden"></td>
					  	<td width="34%"align="right"><input name="foto" type="file" id="foto" accept="image/jpg" align="right"> </td>
					    <td width="20%"align="right"> <input name="submit" type="submit" value="Cargar Imagen" class="cajaP" align="right"> </td>
					  </tr>
								<meta http-equiv="refresh" content="1020;URL=http://www.reggnetwork.net" />
					</table>
					</form>
			    </div>
				<div id="botonBusqueda">
						
		<a href="../central2.php"><img src="../images/botonaceptar.jpg" alt="Salir" width="69" height="25" border="1" onclick = "../central2.php" ondblclick="../central2.php" title="salir"   /></a>
				</div>
			    </div>
			 	</div>				
		  </div>
	</body>
</html>			