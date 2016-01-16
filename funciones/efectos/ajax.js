/* Inedito Guatemala
/* ©2006 By Jose F. Rivas
/* www.inegua.com */
	var progressbar_steps = 50;	// total de numero de pasos para cargar la pagina
	
	/* no cambiar ninguna de estas variables */
	var inegua_progressPane = false;
	var inegua_progressBar_bg = false;
	var inegua_progressBar_outer = false;
	var inegua_progressBar_txt = false;
	var progressbarWidth;
	var currentStep = 0;
	function moveProgressBar(steps){
		if(!inegua_progressBar_bg){
			inegua_progressPane = document.getElementById('inegua_progressPane');
			inegua_progressBar_bg = document.getElementById('inegua_progressBar_bg');
			inegua_progressBar_outer = document.getElementById('inegua_progressBar_outer');
			inegua_progressBar_txt = document.getElementById('inegua_progressBar_txt');
			progressbarWidth = inegua_progressBar_bg.clientWidth;
		}
		if(!steps){
			inegua_progressBar_outer.style.width = progressbarWidth + 'px';
			inegua_progressBar_txt.innerHTML = '100%';
			setTimeout('document.getElementById("inegua_progressPane").style.display="none"',50);
		}else{
			currentStep+=steps;
			if(currentStep>progressbar_steps)currentStep = progressbar_steps;
			var width = Math.ceil(progressbarWidth * (currentStep / progressbar_steps));
			inegua_progressBar_outer.style.width = width + 'px';
			var percent = Math.ceil((currentStep / progressbar_steps)*100);
			inegua_progressBar_txt.innerHTML = percent + '%';
			if(currentStep==progressbar_steps){
				setTimeout('document.getElementById("inegua_progressPane").style.display="none"',50);
			}
		}
		
		
		
		
	}

function demoProgressBar()
	{
		if(currentStep<progressbar_steps){
			moveProgressBar(1);
			setTimeout('demoProgressBar()',100);
		}
	}
	
	
	window.onload = demoProgressBar;

/* ventanita popup */
var miPopup
function abreVentana(){
	miPopup = window.open("contactanos.php","miwin","width=500,height=354,scrollbars=no")
	miPopup.focus()
	}