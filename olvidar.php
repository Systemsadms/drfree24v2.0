<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Drfree24.com</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
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


<br />




<table width="228" border="0" align="center">
    <tr>
      <td width="218" align="center"><em><strong>Recuperar Contrase&ntilde;a</strong></em></td>
    </tr>
  </table>
  <br />

  
  

  
  
  
			<?php
            		if (isset($_POST['olvidar']))	
					{
						$email = $_POST['email'];
						
					 	require ("cnx.php");
						$ssql = "SELECT * FROM casilleros WHERE email='$email'";
						$rs = mysql_query($ssql,$conexion);

			
								if (mysql_num_rows($rs)== 1)
								{

									$ssql = mysql_query("SELECT * FROM casilleros WHERE email='$email'");
									$pass 		=  mysql_result($ssql,0,"pass");
									$body='Hemos recibido una solicitud de recuperacion de contrasena. Abajo mostramos su actual contraña, si desea realizar el cambio de la misma puede realizarlo en su cuenta de ususario.	
																				
										Password:			'.$pass.'							
										
										
										Si usted no realizo esta solicitud por la seguridad de su cuenta notifique a nuestro personal de inmediato.
										
										';
								
								
								
											$para= $email;
											$desde = $_POST["email"];
											$mensaje = $body;
										
					
											$asunto 	= "Recuperacion de Password";
											$desde		= $_POST["email"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["correo"] . "\r\n";
											$cabeceras = "From: " . "dr.free24@gmail.com" . "\r\n";    
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);
								
								
											mysql_close($conexion);
											
											echo "Su contraseña ha sido enviada a su direccion de correo, recuerde revisar su bandeja de correos no deseados en caso de no encontrar el correo de recuperacion de contrase en la bandeja de entrada";
								
								
								}else
								{
									echo "Esa direccion de correo no se encuentra dentro de nuestra base de datos por favor comuniquese con nuestro personal";	
								}
						
					}
					else
					{
            
            ?>
            
              
            
            
      <table width="700" border="0" align="center">
    <tr>
      <td width="378" align="center">Ingrese su direccion de correo electronico y en pocos segundo recibira en su email los datos solicitados.</td>
      </tr>
  </table>
          
            
  
  
  <br />
  <form method="post" action="#">
  <table width="306" border="0" align="center">
    <tr>
      <td width="244" align="center">
      	
      	  Direccion de email: 
      	    <input type="text" name="email" id="email" />
        </td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="olvidar" id="olvidar" value="Enviar Solicitud" /></td>
    </tr>
  </table>
  </form>
  
  
  
  
  
  <?php
	}
  ?>
  <br />




<br />




</div><!--FIN DE MARCO CONTENIDO-->



<div id="Separacion"></div>
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