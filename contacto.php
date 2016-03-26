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



<div id="MarcoContenidocontacto">



<table width="900" border="0">
  <tr>
    <td width="500"><img src="img/contactofondo.jpg" width="500" height="580" /></td>
    <td width="390">
    
    
    
              <?php
			  /*
			 if(isset($_POST["enviar"]))
			{
				
				$para = 'systemsadms@hotmail.com';
				$asunto = $_POST["asunto"];
				$desde = $_POST["desde"];
				$mensaje = "Telefono de Contacto:".$_POST["telefono"] . "<br> " . "Mensaje:" . $_POST["mensaje"];
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["desde"] . "\r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
				
			echo "<font color='000'><b>Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas</b></font>";
				
			}
			*/
			?>
    
    
    
    
    
    
    <?php
 if(isset($_POST['enviar']))
					{			
			$body='Hemos recibido una solicitud de contacto con los siguientes datos
			
								Telefono de Contacto			'.$_POST['telefono'].'								
								Mensaje: 						'.$_POST['mensaje'].'
								';
								
											$para="atencionalcliente@drfree24.com";
				
											$mensaje = $body;
					
											$asunto 	= $_POST["asunto"];
											$desde		= $_POST["email"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["email"] . "\r\n";
											$cabeceras = "From: " . $_POST ["email"] . "\r\n";    
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);	
											
											echo "<font color='000'><b>Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas</b></font>";
			}


?>
    
    
    
    <table width="200" border="0" align="center">
      <tr>
        <td align="center"><font color="#FF6600" size="+2"><strong>Contactanos</strong></font></td>
      </tr>
    </table>
      <table width="350" border="0" align="center">
        <tr>
          <td align="left" bgcolor="#CCCCCC">
          <form method="post" action="#">
            <table width="330" border="0" align="center">
              <tr>
                <td width="73"><strong>Nombre y Apellido</strong></td>
                <td width="247" align="left"><input name="nombre" type="text" id="nombre" size="35" /></td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td align="left"><input name="email" type="text" id="email" size="35" /></td>
              </tr>
              <tr>
                <td><strong>Telefono</strong></td>
                <td align="left"><input name="telefono" type="text" id="telefono" size="35" /></td>
              </tr>
              <tr>
                <td><strong>Asunto</strong></td>
                <td align="left"><input name="asunto" type="text" id="asunto" size="35" /></td>
              </tr>
            </table>
            <table width="330" border="0" align="center">
              <tr>
                <td><strong>Escriba su mensaje:</strong></td>
              </tr>
              <tr>
                <td align="left"><textarea name="mensaje" id="mensaje" cols="42" rows="5"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center">
                <input type="submit" name="enviar" id="button" value="Enviar Correo" /></td>
              </tr>
            </table>
          </form> 
          </td>
        </tr>
      </table>
      <br />
      <table width="350" border="0" align="center">
        <tr>
          <td width="152" align="center">
          <font color="#FF6600">
          <strong>Horario de Atencion</strong><br />
          De Lunes a Viernes<br />
          A partir de las 8:00am a 5:00pm <br />
          Hora de Venezuela
          </font>
          </td>
          <td width="37">&nbsp;</td>
          <td width="147" align="center" valign="top">
          <font color="#FF6600">
          <strong>Atencion Telefonica</strong><br />
          +58 212 3311154<br />
          +58 212 8144314<br />
          001 305 6473495
          </font>
          </td>
        </tr>
      </table>
      <br />
      <table width="200" border="0" align="center">
        <tr>
          <td align="center">
          <font color="#FF6600" size="+1">atencionalcliente@drfree24.com</font></td>
        </tr>
      </table></td>
  </tr>
</table>



</div><!--MarcoContenidoauto-->



<div id="Separacion"></div><!---->
<div id="MarcoDireccion">
  <table width="900" border="0" align="left">
    <tr>
      <td width="525" align="left"><em><strong>Drfree24 Transporte Importador C.A</strong></em></td>
      <td width="365"><table width="284" border="0" align="center">
        <tr>
          <td width="140"><a href="https://www.systemsadms.com"><em><strong>Desing By: Systems Admins C.A</strong></em></a></td>
          </tr>
      </table></td>
    </tr>
    </table>
</div>
<!--FIN de amrco direccion-->



</div><!--FIN DE MARCO GLOBAL-->


</body>
</html>