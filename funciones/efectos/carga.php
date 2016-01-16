<html>
<head>
<style>
  div.barra-progreso {
    width: 300px;
    height: 170px;
    text-align: left;
    border: 1px solid #315C7C;
  }

  div.texto-progreso {
    width: 100%;
    font-family: Arial;
    font-size: 25px;
    height: 70px;
    text-align: center;
    padding-top: 55px;
	padding-bottom: 0px;
    margin-top: 5px;
	color: #315C7C;
    background: url(carga.gif) no-repeat center top;
  }

  div.vacio {
    position: absolute;
    width: 20px;
    height: 20px;
    border: 2px solid #315C7C;
    background: #FFF3C9;
  }

  div.lleno {
    position: absolute;
    width: 20px;
    height: 20px;
    border: 2px solid #315C7C;
    background: #315C7C;
  }

  div#pos1 {
    margin-left: 17px;
  }

  div#pos2 {
    margin-left: 44px;
  }

  div#pos3 {
    margin-left: 71px;
  }

  div#pos4 {
    margin-left: 98px;
  }

  div#pos5 {
    margin-left: 125px;
  }

  div#pos6 {
    margin-left: 152px;
  }

  div#pos7 {
    margin-left: 179px;
  }

  div#pos8 {
    margin-left: 206px;
  }

  div#pos9 {
    margin-left: 233px;
  }

  div#pos10 {
    margin-left: 260px;
  }
</style>
<script>
	// Cambia el progreso de la barra
	function progreso(n) {
		if (n>0 && n<=100) {
			// Calculo en que decena se encuentra
			var valor = parseInt(n/10);
			if (valor != 0) {
				// Cambio el cuadrado de la decena correspondiente de vacio a lleno
				document.getElementById("pos"+valor).className = "lleno";
			}
			// Cambio el porcentaje
			document.getElementById("texto").innerHTML = "Cargando datos ...<BR>"+n+"%";
		}
	}
	
	// Simula una carga
	function simulacion(porc) {
		if (porc<=100) {
			progreso(porc);
			setTimeout("simulacion("+(porc+1)+")", 100);
		}
	}
</script>
<body onLoad="simulacion(0)">
<center>
</center>
</body>
</html>
