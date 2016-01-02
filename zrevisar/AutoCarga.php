<?php
	
	function __autoload($class_name) {
		
		$rutasClases = array('../','',
						 	 '../modelo/','modelo/','modelo/dao/','../modelo/dao/',
							 'controlador/','../controlador/',
							 '..vista/','vista/'
							);
			
		$extList='.php,.modelo.php,.modelo.dao.php,.controlador.php';
		$exts = explode(',',$extList);
		
		foreach($exts as $ext) {
			foreach($rutasClases as $dir) {
				$file = $dir.$class_name.$ext;
				if(file_exists($file)) {
					include($file);
				}
			}
		}
	}
?>
