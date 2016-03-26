<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Drfree24.com</title>




<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="galeria/ajxlightbox.css" type="text/css" />
<script src="galeria/ajxlightbox.js" type="text/javascript"></script>
</head>

<body>

<div id="MarcoGlobal">


<div id="MarcoHead">
<div id="Logo"></div>
<div id="Dir">
<div id="separacionlogin"></div>
 <table width="300" border="0" align="center">
    <tr>
      <td>
      <form>
        <table width="300" border="0" align="center">
        <tr>
          <td width="25"><img src="img/user.jpg" width="25" height="25" /></td>
          <td width="39">Usuario</td>
          <td width="66"><input name="textfield6" type="text" id="textfield6" size="8" /></td>
          <td width="34">Clave</td>
          <td width="75"><input name="textfield7" type="password" id="textfield7" size="8" /></td>
          <td width="35"><a href="#"><img src="img/check.JPG" width="29" height="23" /></a></td>
        </tr>
      </table>
        <table width="300" border="0" align="center">
          <tr>
            <td width="158" align="center">¿Nuevo?Registrate aqui</td>
            <td width="26">&nbsp;</td>
            <td width="102">Olvide mi clave</td>
          </tr>
        </table>
      </form> 
      
      </td>
    </tr>
  </table>
</div><!--FIN DE DIR-->
<div id="social">
  <table width="300" border="0" align="center">
    <tr>
      <td>
      <br />
      <table width="200" border="0" align="center">
        <tr>
          <td width="50"><img src="img/twitter.jpg" width="48" height="45" /></td>
          <td width="87"><img src="img/face.jpg" width="45" height="40" /></td>
          <td width="16"><img src="img/play.jpg" width="45" height="40" /></td>
          <td width="19"><img src="img/ven.jpg" width="45" height="40" /></td>
          <td width="19"><img src="img/ban.jpg" width="55" height="45" /></td>
        </tr>
    </table></td>
    </tr>
  </table>
</div><!--FIN DE SOCIAL-->

</div><!--FIN DE MARCO HEAD-->



<div id="Separacion"></div><!---->



<div id="Marcomenu">
<div id="home">
  <table width="70" border="0" align="center">
    <tr>
      <td align="center"><a href="index.php"><img src="img/casa.png" width="42" height="43" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
    </tr>
</table>
</div><!--FIN MENU-->
<div id="menu"> <table width="50" border="0" align="center">
    <tr>
      <td><a href="micuenta.php"><img src="img/drfree.png" width="121" height="50" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
    </tr>
</table></div><!--FIN MENU-->
<div id="menu">
  <table width="50" border="0" align="center">
    <tr>
      <td><a href="servicios.php"><img src="img/servicios.png" width="121" height="50" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
    </tr>
  </table>
</div><!--FIN MENU-->
<div id="menu">
  <table width="50" border="0" align="center">
    <tr>
      <td><a href="compraenusa.php"><img src="img/compras.png" width="121" height="50" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100" /></a></td>
    </tr>
  </table>
</div><!--FIN MENU-->
<div id="menu">
  <table width="50" border="0" align="center">
    <tr>
      <td><a href="tarifas.php"><img src="img/tarifas.png" width="121" height="50" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
    </tr>
  </table>
</div><!--FIN MENU-->
<div id="menu">
  <table width="50" border="0" align="center">
    <tr>
      <td><a href="galerias.php"><img src="img/galeria.png" width="124" height="50" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
    </tr>
  </table>
</div><!--FIN MENU-->
<div id="menu">
  <table width="50" border="0" align="center">
    <tr>
      <td><a href="contacto.php"><img src="img/contacto.png" width="121" height="50" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
    </tr>
  </table>
</div><!--FIN MENU-->
</div><!--FIN DE MARCO MENU-->


<div id="MarcoContenido">

<br /><br />



<?php


	include ("cnx.php");					
				
				$consulta = "SELECT * FROM galeria;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				if (mysql_num_rows($hacerconsulta)>=1)
				{
				
				echo "<div id='galeria'>";				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{				
				echo "<div id='galeria'>				
				<div class='AJXLightboxOCRJCfB'>
				 <div>
				 <a href='galeria/guia_".$reg[1].".jpg' rel='ajxlightbox'><img src='galeria/guia_".$reg[1].".jpg' width='85' height='85'/></a></div>
				</div>

				</div>";
							

				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				}
				echo "</div>";
				mysql_close($conexion);
				
				echo "<br>";
				

				}
				else
				{
					echo "No hay fotos cargadas a la galeria";
					echo "<br>";
				}
				
				?>


</div><!--FIN DE MARCO CONTENIDO-->
<div id="Separacion"></div><!---->
<div id="MarcoDireccion">
  <table width="900" border="0" align="left">
    <tr>
      <td width="525" align="left"><em><strong>Drfree24 Transporte Importador C.A</strong></em></td>
      <td width="365"><table width="284" border="0" align="center">
        <tr>
          <td width="140">&nbsp;</td>
          <td width="29"><img src="img/twitter.jpg" width="35" height="35" /></td>
          <td width="30"><img src="img/face.jpg" width="35" height="30" /></td>
          <td width="31"><img src="img/play.jpg" width="35" height="30" /></td>
          <td width="32"><img src="img/ven.jpg" width="35" height="30" /></td>
          </tr>
      </table></td>
    </tr>
    </table>
</div>
<!--FIN de amrco direccion-->



</div><!--FIN DE MARCO GLOBAL-->




</body>
</html>