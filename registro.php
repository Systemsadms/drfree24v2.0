<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Drfree24.com</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
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
      <td><a href="#"><img src="img/preguntas.png" width="121" height="50" style="opacity:1;filter:alpha(opacity=100)"
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
</div>
<!--FIN DE MARCO MENU-->






				<?php
			 	if (isset ($_POST['btn_enviar']))
				{
				//echo "funciona el boton";	
				require("reg.php");	 
				}				
				?>
                
                
                
                
				<div id="MarcoContenido">
<br />
<table width="700" border="0" align="center">
  <tr>
    <td align="left"><strong><font color="#FF6600" size="+1">Coloque sus datos para crear su usuario Drfree24</font></strong></td>
  </tr>
</table>
<table width="700" border="0" align="center">
  <tr>
    <td align="left" bgcolor="#CCCCCC">
    <form method="post" action="#">
      <table width="700" border="0">
        <tr>
          <td width="69" align="left">Usuario</td>
          <td width="227"><span id="sprytextfield1">
            <input name="nick" type="text" id="nick" size="35" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="72">Nombres:</td>
          <td width="294"><span id="sprytextfield2">
            <input name="nombres" type="text" id="nombres" size="48" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
    </table>
      <br />
      <table width="700" border="0">
        <tr>
          <td width="68" align="left">Apellidos:</td>
          <td width="233"><span id="sprytextfield3">
            <input name="apellidos" type="text" id="apellidos" size="35" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="48">Email:</td>
          <td width="313"><span id="sprytextfield4">
            <input name="email" type="text" id="email" size="51" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      </table>
      <br />
      <table width="700" border="0">
        <tr>
          <td width="129" align="left">Telefono Celular:</td>
          <td width="236"><span id="sprytextfield5">
            <input name="celular" type="text" id="celular" size="35" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="63">BBPin</td>
          <td width="234"><input name="telefono" type="text" id="textfield8" size="30" /></td>
          </tr>
      </table>
      <br />
      <table width="700" border="0">
        <tr>
          <td width="99" align="left">Tu Direccion:</td>
          <td width="571"><span id="sprytextfield6">
            <input name="dir" type="text" id="dir" size="95" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      </table>
      <br />
      <table width="700" border="0">
        <tr>
          <td width="50" align="left">Pais:</td>
          <td width="154"><select name="pais" id="pais">
            <option>Venezuela</option>
            <option>Estados Unidos</option>
            <option>Panama</option>
            <option>China</option>
          </select></td>
          <td width="68">Estado:</td>
          <td width="160"><span id="sprytextfield7">
            <input type="text" name="estado" id="estado" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="68">Ciudad:</td>
          <td width="154"><span id="sprytextfield8">
            <input type="text" name="ciudad" id="ciudad" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
  </table>
  <br />
      <table width="700" border="0">
        <tr>
          <td width="20" align="center"><span id="sprycheckbox1">
            <input type="checkbox" name="checkbox1" id="checkbox1" />
            <span class="checkboxRequiredMsg">Please make a selection.</span></span></td>
          <td width="670" align="left">He leido y acepto<a href="#" target="_blank"> las politicas generales de envio, transitos nacionales y seguros</a> de drfree24</td>
          </tr>
      </table>
      <br />
      <table width="354" height="95" border="0" align="center">
        <tr>
          <td width="92">
          
          
          
          
          
          
          
          
			<?php   	
			//RECAPTCHA
					                  
                    require_once('recaptchalib.php'); //libreria descargarda de Google
                     
                    // Llaves creadas en Google
                    $publickey = "6Le-b-4SAAAAAHDMxWYLQkqLemB_KAt2PdmOkO-P"; //llave publica
                    $privatekey = "6Le-b-4SAAAAAHr8VP3mKIGluUkjNAaluQKJhoKm"; //lave privada
                     
                    //Respuesta de reCAPTCHA
                    $resp = null;
                    # Errores de reCAPTCHA si es que hay
                    $error = null;
                     
                    # was there a reCAPTCHA response?
                    if ($_POST["recaptcha_response_field"]) { //Si la variable existe es decir, fué enviado desde un Formulario
                    //la función necesita la llave privada, la IP del usuario, el campo "desafio" y el campo "respuesta" que dió el usuario
                            $resp = recaptcha_check_answer ($privatekey,
                                                            $_SERVER["REMOTE_ADDR"],
                                                            $_POST["recaptcha_challenge_field"],
                                                            $_POST["recaptcha_response_field"]); //Cuando recibimos los datos por el formulario, procedemos a hacer la verificacion en reCATPCHA
                     
                            if ($resp->is_valid) {
                                    //echo "AQUI VA TODO EL CODIGO PARA GRABAR, ENVIAR CORREO, ETC. es decir, cuando pasó el reCAPTCHA";
                            } else {
                                    //En caso falló el reCAPTCHA
                                    $error = $resp->error; //Si deseas muestras los errores
                                    echo $error;
                                    //Aqui va por ejemplo la reimpresion del formulario y el mensaje de reCAPTCHA invalido, etc.
                            }
                    }
					
                    echo recaptcha_get_html($publickey, $error); //imprimimos el formulario de reCATPCHA
										
           ?>
           
           
           
           
           
           
           
           
           
           
           
           
           
          </td>
          <td width="187"><table width="200" border="0" align="center">
            <tr>
              <td><input name="Reset" type="reset" value="Borrar Datos" /></td>
              <td><input type="submit" name="btn_enviar" id="btn_enviar" value="Registrarme" /></td>
            </tr>
          </table></td>
        </tr>
      </table>
<p>&nbsp;</p>
    </form>
    </td>
  </tr>
</table>
</div><!--FIN MarcoContenido-->
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




<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>
</body>
</html>