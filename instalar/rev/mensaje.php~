<?php 
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
	
	Autores: Pedro Obreg�n Mej�as
			 Rub�n D. Mancera Mor�n
			 Luis Ignacio Albacete
	
	Fecha Liberaci�n del c�digo: 03/09/2006
	Factusyn 2006 -- Murcia		 
	
	*/
?>

<html>
<head>
<title>Factusyn</title>
<link href="../estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo1 {
	color: #0000FF;
	border: 0px;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"></head>

<body>
<p>&nbsp;</p>

     <table width="580" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#333333" class="mensaje">
        <tr> 
          <td colspan="2"><div align="center"><img src="../imagenes/mensajes/<?php  echo $cabecera; ?>" width="100%" height="23"></div></td>
        </tr>
        <tr class="mensaje"> 
          <td class="ficha"><p align="center"><font color="#ff0000" size="2" face="Verdana, Arial, Helvetica, sans-serif" class="mensaje"><strong><br>
            <?php  echo $texto; ?></strong></font></p>
            <p align="center" class="mensaje">&nbsp;</p>
<table border="0" align="center" class="mensaje">
<tr>
				   
				     <?php 
					  if  ($actionimp<>"")
					  {
					 ?> 
					 <td>
                      <form action="fpdf/<?php  echo $actionimp; ?>" target="_blank" method="post">
                        
                        <div align="center">
                          <input type="hidden" name="<?php  echo $namevar; ?>" value="<?php  echo $valuevar; ?>">
                          <?php 
					        if  ($namevar2<>"")
					          {
					      ?> 
                          <input type="hidden" name="<?php  echo $namevar2; ?>" value="<?php  echo $valuevar2; ?>">
                          <?php 
					           }
					      ?>
                            
                          <input name="submit" type="submit" value="<?php  echo $valueimp; ?>">
                        </div>
                      </form>				   </td>
					  <?php 
					   }
					  ?>
                   
					<td>
					<center>
                      <form action="<?php  echo $actionv; ?>" method="post">
                        <input name="submit" type="submit" value="<?php  echo $valuev; ?>">
                      </form>
					 </center>                    </td>
	    </tr>
		    </table>
          </td>
       </tr>
</table>
</body>
</html>
