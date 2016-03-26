<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Drfree24.com</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style>
A:link, A:visited { color:#F70; }
A:hover { color:#906; }
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
      <td><a href="#"><img src="img/galeria.png" width="124" height="50" style="opacity:1;filter:alpha(opacity=100)"
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




<div id="MarcoContenidoMidrfree">

<?php
if (isset($_SESSION["login"]))
	{
		$micuenta=$_SESSION["login"];
		
			
	//$nick = $_SESSION["login"];		
  	require("cnx.php");
	$ssql = mysql_query("SELECT * FROM casilleros WHERE nick='$micuenta'");	
	
	$cas	 	=  mysql_result($ssql,0,"id");
	$nick 		=  mysql_result($ssql,0,"nick");
	$pass 		=  mysql_result($ssql,0,"pass");
	$nombres 	=  mysql_result($ssql,0,"nombres");
	$apellidos 	=  mysql_result($ssql,0,"apellidos");
	$ci 		=  mysql_result($ssql,0,"ci");
	$email 		=  mysql_result($ssql,0,"email");
	$pais 		=  mysql_result($ssql,0,"pais");
	$estado 	=  mysql_result($ssql,0,"estado");
	$ciudad 	=  mysql_result($ssql,0,"ciudad");
	$telefono 	=  mysql_result($ssql,0,"telefono");
	$celular 	=  mysql_result($ssql,0,"celular");
	$dir 		=  mysql_result($ssql,0,"dir");
	mysql_close($conexion);
	?>
    
    
     <?php
						if (isset($_POST['datos']))
						{
						?>
                        
                        
                        
    <div id="datos">
        <form method="POST" action="#">
                         <table width="850" border="0" align="center">
                          <tr>
                            <td align="center" bgcolor="#CCCCCC"><table width="830" border="0" align="center">
                              <tr>
                                <td width="27"><font color="#0000FF">Nick:</font></td>
                                <td width="26">
                                  <input name="nick2" type="text" id="nick2"  value="<?php echo $nick; ?>" readonly="readonly"/>                                
                                </td>
                                <td width="55"><font color="#0000FF">Password:</font></td>
                                <td width="173"><input type="text" name="pass2" id="pass2" value="<?php echo $pass; ?>" /></td>
                                <td width="66"><font color="#0000FF">Nombres:</font></td>
                                <td width="173"><input name="nombres2" type="text" id="nombres2" value="<?php echo $nombres; ?>" /></td>
                                <td width="67"><font color="#0000FF">Apellidos:</font></td>
                                <td width="179"><input name="apellidos2" type="text" id="apellidos2" value="<?php echo $apellidos; ?>" /></td>
                              </tr>
                              <tr>
                                <td><font color="#0000FF">Email:</font></td>
                                <td><input name="email2" type="text" id="textfield5"  value="<?php echo $email; ?>" readonly="readonly"/></td>
                                <td><font color="#0000FF">Pais:</font></td>
                                <td><input type="text" name="pais2" id="textfield6" value="<?php echo $pais; ?>" /></td>
                                <td><font color="#0000FF">Estado:</font></td>
                                <td><input name="estado2" type="text" id="textfield7" value="<?php echo $estado; ?>" /></td>
                                <td><font color="#0000FF">Ciudad:</font></td>
                                <td><input name="ciudad2" type="text" id="textfield8" value="<?php echo $ciudad; ?>" /></td>
                              </tr>
                              <tr>
                                <td><font color="#0000FF">Telefono:</font></td>
                                <td><input name="telefono2" type="text" id="telefono2"  value="<?php echo $telefono; ?>"/></td>
                                <td><font color="#0000FF">Celular:</font></td>
                                <td><input name="celular2" type="text" id="celular2"  value="<?php echo $celular; ?>"/></td>
                                <td><font color="#0000FF">Direccion:</font></td>
                                <td><input name="dir2" type="text" id="dir2"  value="<?php echo $dir; ?>"/></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                              <table width="830" border="0" align="center">
                                <tr>
                                  <td><table width="200" border="0" align="right">
                                    <tr>
                                      <td align="center"><strong><a href="micuenta.php"><font color="#FF0000">>>OCULTAR DATOS<<</font></a></strong></td>
                                    </tr>
                                  </table></td>
                                </tr>
                            </table>
                              <table width="200" border="0">
                                <tr>
                                  <td><input type="reset" name="Reset" id="button" value="Deshacer Cambios" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="submit" name="editar" id="editar" value="Guardar Cambios" /></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
						</form>
    					</div> <!--FIN DE DATOS-->
    					 <?php						   
							}
						   ?> 
    
    
    
    
    <?php                 
    if (isset($_POST["editar"]))
	{
			$id2 		=	$cas;
			$nick2		= 	$_POST['nick2'];
			$pass2		= 	$_POST['pass2'];
			$nombres2	= 	$_POST['nombres2'];
			$apellidos2	= 	$_POST['apellidos2'];			
			$email2		=	$_POST['email2'];
			$pais2		=	$_POST['pais2'];
			$estado2	=	$_POST['estado2'];
			$ciudad2	=	$_POST['ciudad2'];
			$telefono2	=	$_POST['telefono2'];
			$celular2	=	$_POST['celular2'];
			$dir2		=	$_POST['dir2'];
			
					
	

require ("cnx.php");				
$consulta = "UPDATE casilleros SET 
pass ='$pass2', nombres ='$nombres2', apellidos ='$apellidos2', email ='$email2', pais='$pais2', estado='$estado2', ciudad='$ciudad2', telefono='$telefono2', celular='$celular2', dir='$dir2' WHERE id=$id2" ;
			
			$hacerconsulta = mysql_query ($consulta);
			
				
			mysql_close ($conexion);
			
			echo "<table width='600' border='0' align='center'>
				  <tr>
					<td><b>Los cambios en tus datos personales fueron realizados con exito.</b></td>
				  </tr>
				</table>";
	}
	
	?>
    
    
    
    
<table width="900" border="0">
  <tr>
    <td width="275" valign="top">
    <div id="Dir2">
    <table width="200" border="0">
      <tr>
        <td><strong><font color="#FF6600">Hola, <?php echo $nick ?></font></strong></td>
      </tr>
      <tr>
        <td>Recuerda Cerrar tu session al finalizar tu consulta.</td>
      </tr>
    </table>
    </div>
    </td>
    <td width="300">
    
    
    
    <div id="Dir">
<table width="300" border="0" align="center">
  <tr>
    <td width="154"><strong><font color="#FF6600">Envios Aereos</font></strong></td>
    <td width="136"><strong><font color="#FF6600">Envios Maritimos</font></strong></td>
  </tr>
  <tr>
    <td>12250 NW 25th ST Suite 115</td>
    <td>3750 NW 114h Ave Unit 6</td>
  </tr>
  <tr>
    <td>C/O Airmarine</td>
    <td>DORAL STATE</td>
  </tr>
  <tr>
    <td>MIAMI</td>
    <td>FLORIDA 33178</td>
  </tr>
  <tr>
    <td>FLORIDA 33182</td>
    <td><img src="img/phone.jpg" width="10" height="10" />305 629 5018</td>
  </tr>
  <tr>
    <td align="left" valign="baseline"><img src="img/phone.jpg" width="10" height="10" />305 477 3496</td>
    <td><img src="img/phone.jpg" width="10" height="10" />Fax: 305 629 5017</td>
  </tr>
  </table>
</div><!--FIN DE DIR-->
    </td>
    <td width="311" align="center" valign="top">
   
    <table width="220" border="0" align="center">
      <tr>
        <td width="151" align="center" valign="top"> 
            <div id="Dir2"><strong><font color="#FF6600">
            <form action="#" method="post" name="forma7" >
            <input type="hidden" name="datos" value="articulo3"/>            		 
                  <a href="javascript:document.forma7.submit();" class="Estilo3">Editar datos de tu cuenta</a>
                 </form>
            </font></strong></div>
        </td>
        <td width="139" align="center">
        <form method="post" action="destruir.php">
        <input type=image src="img/salir.jpg" width="98" height="34">       
        </form>
        </td>
      </tr>
    </table>
    
    </td>
  </tr>
</table>
<br /><br />




<?php

 				if(isset($_POST['enviarformulario']))
					{
						
						if(isset($_FILES['factura']) )//Comprobamos si existe un archvio en file				
						{		
									//Como saber que propiedad tiene el archivo subido			
									/*
									foreach ($_FILES["factura"] as $clave => $valor)
									{
										echo ("Propiedad: $clave ------ Valor: $valor <br>");	
									}*/

							$numFactura = $_POST["numFactura"];
				
													$extension= $_FILES["factura"]["type"];
													
													if($extension == "application/pdf")
													{
														$archivoRecibido= $_FILES['factura']['tmp_name'];
														$destino="facturas/" . $numFactura.".pdf";
														move_uploaded_file($archivoRecibido, $destino);
														echo "<h5 align='center'><font color='black'>La orden de prealerta fue enviada con exito. </font></><br> ";						
													
													
													
													
													
						require ("cnx.php");	
						$cliente		=$_POST['user'];
						$fechadecompra	=$_POST['fecha'];
						$numFactura 	=$_POST['numFactura'];
						$currier 		=$_POST['currier'];
						$numTracking	=$_POST['tracking'];
						$descripcion 	=$_POST['compra'];							
						

												
						mysql_query ("INSERT INTO facturas VALUES 
						('', '$cliente','$fechadecompra','$numFactura','$currier','$numTracking','$descripcion')");
						mysql_close ($conexion);								
													
													
													
													
													
						
					$body='Se ha reportado una nueva orden de recolecta de mercancia
								</br>
								ID de cliente:		'.$_POST['user'].'
								</br>								
								Factura:			'.$_POST['numFactura'].'
								</br>
								Fecha:				'.$_POST['fecha'].'
								</br>
								Currier: 			'.$_POST['currier'].'
								</br>
								Nmro Tracking: 		'.$_POST['tracking'].'
								</br>
								Descripcion: 		'.$_POST['compra'].'
								</br>
								Link de Compra: 	'.$_POST['link'].'
								


								
								';
				
				//$para = 'systemsadms@hotmail.com';
				$para = 'atencionalcliente@drfree24.com';
				$asunto = 'Se ha reportado una nueva orden de recolecta de mercancia';
				$desde = 'drfree24.com';
				$mensaje = $body;
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: www.drfree24.com \r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
				
				
				}							
													
													
													
													else
													{
													 		
															  echo "<h3 align='center'><font color='red'>Es necesario cargar la factura de compra (en formato .pdf) para prealertar el paqute. </font></><br> ";
													}
						
						
						}



			
			}//FIN DE PREALERTAR PAQUETES





			if(isset($_POST['reportarpago']))
					{
						
					require ("cnx.php");
					
					$clientep	=$_POST['clientep'];
					$depositop 	=$_POST['numerop'];
					$bancpo 	=$_POST['bancop'];
					$fechap 	=$_POST['fechap'];
					$nombredep 	=$_POST['nombredep'];
					$nombrep 	=$_POST['nombrep'];
					$montop 	=$_POST['montop'];
					$telefonop 	=$_POST['telefonop'];
					$emailp	 	=$_POST['emailp'];
					$estatusp 	= "Reportado";
										
					mysql_query ("INSERT INTO pagos VALUES 
					('', '$clientep','$depositop','$bancpo','$fechap','$nombredep','$nombrep','$montop','$telefonop','$emailp','$estatusp')");
					mysql_close ($conexion);	
			
			$body='Se ha reportado un nuevo pago
			
								Numero de Deposito o Transferencia:		'.$_POST['numerop'].'
								Banco: 		'.$_POST['bancop'].'
								Monto: 		'.$_POST['montop'].'
								Fecha: 		'.$_POST['fechap'].'
								Nombre del Depositante: 	'.$_POST['nombredep'].'
								Nombre:		'.$_POST['nombrep'].'
								Telefono: 	'.$_POST['telefonop'].'
								Correo: 	'.$_POST['emailp'].'

								
								';
								
											//$para="dr.free24@gmail.com";
											$para = 'atencionalcliente@drfree24.com';
											
												
											$desde = $_POST["nombre"];
											$mensaje = $body;
											$asunto 	= "Nuevo Reporte de Pago ";
											$desde		= $_POST["nick"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["nick"] . "\r\n";
											//$cabeceras = "From: " . $_POST ["correo"] . "\r\n";    
											$cabeceras .= "From: www.drfree24.com \r\n";
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);   	
			
			
			
			
			echo" Su pago ha sido reportado con exito";	
						
			}// FIN DE REPORTE DE PAGOS

			
?>

<br />

<table width="800" border="0" align="center">
  <tr>
    <td>
    <div id="reportes">
    
      <div id="TabbedPanels1" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Cartelera de Envios</li>
          <li class="TabbedPanelsTab" tabindex="0">Prealertar Paquetes</li>
          <li class="TabbedPanelsTab" tabindex="0">Reportar Pagos</li>
        </ul>
        <div class="TabbedPanelsContentGroup">
        
          <div class="TabbedPanelsContent"><!--CARTELERA DE ENVIOS-->
			<?php
				require("cnx.php");
				//$cas2 = "1";
				$consulta = "SELECT * FROM guias WHERE user='$cas';";
				$hacerconsulta=mysql_query ($consulta,$conexion);


				if (mysql_num_rows($hacerconsulta)>=1)
				{
				echo "<table width='793px' border='1' bordercolor='#000000' align='center' cellspacing='0' cellpadding='3'>";
				echo "<tr>";
				echo "<td align='center'><b>Guia Nº</b></td>";
				echo "<td align='center'><b>Tracking Nº</b></td>";
				echo "<td align='center'><b>Direccion de Envio</b></td>";
				echo "<td align='center'><b>Libras</b></td>";
				echo "<td align='center'><b>Volumen</b></td>";
				echo "<td align='center'><b>Costo de Envio</b></td>";
				echo "<td align='center'><b>Descripcion</b></td>";
				echo "<td align='center'><b>Fotos</b></td>";
				echo "<td align='center'><b>Dimensiones</b></td>";
				echo "</tr>";
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";
				echo "<td align='center'>".$reg[5]."</td>";
				echo "<td align='center'>".$reg[6]."</td>";
				echo "<td align='center'>".$reg[7]."</td>";
				//echo "<td align='center'>".$reg[8]."</td>";
				echo "<td a valign='top'  align='center' width='140' >
				<div class='AJXLightboxGVHQAXA'><a href='intranet/img_guias/guia_".$reg[8].".jpg' rel='ajxlightbox' target='_blank'><img src='intranet/img_guias/guia_".$reg[8].".jpg' 				height='25px' width='25px'/></a></div>
				</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				}
				else
				{
					echo "<font color='#FFF'><p align='center'>Actualmente usted no posee articulos en nuestros almacenes</p></font>";
					echo "<br>";
				}
			?>   

          </div><!--FIN DE CARTELERA DE ENVIOS-->
          
          
          
          <div class="TabbedPanelsContent"><!--RECOLECTA DE MERCANCIA-->
          
          
          <form method="post" enctype="multipart/form-data" action="#">
         				 <table width="800" border="0">
                                  <tr>
                                    <td width="300"><table width="300" border="0">
                                      <tr>
                                        <td width="130">Fecha de Compra</td>
                                        <td width="160"><input type="text" name="fecha" id="fecha" /></td>
                                      </tr>
                                      <tr>
                                       <tr>
                                        <td width="130">Nº de Facura </td>
                                        <td width="160"><input type="text" name="numFactura" id="fecha" /></td>
                                      </tr>
                                        <td>Factura De Compra(.PDF)</td>
                                        <td>
                
                                        <input name="factura" type="file" />
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>Currier</td>
                                        <td><input type="text" name="currier" id="currier" /></td>
                                      </tr>
                                      <tr>
                                        <td>Nº de Tracking</td>
                                        <td><input type="text" name="tracking" id="textfield" /></td>
                                      </tr>
                                      <tr>
                                        <td>Descripcion de Compra</td>
                                        <td><input type="text" name="compra" id="compra" /></td>
                                      </tr>
                                      <tr>
                                        <td>Link del Producto</td>
                                        <td><input type="text" name="link" id="link" />
                                        <input type="hidden" name="user" value="<?php echo $cas; ?>" />
                                        
                                                                          
                                        </td>
                                      </tr>
                                    </table></td>
                                    <td width="125" align="center"><input name="enviarformulario" type="submit" value="Enviar Prealerta"  />
                                    </td>
                                    <td width="351"><table width="352" border="0">
                                      <tr>
                                        <td align="center"><img src="img/signo.JPG" width="40" height="40" /></td>
                                      </tr>
                                      <tr>
                                        <td align="center">Recuerda que nuestro costo de envio aereo minimo es de 1080.00 Bs. Por favor no enviar pauqetes que contengan productos que esten valorados en el mercado venezolano por menos de este monto (ejm:forros de telefono, protectores de pantalla, anti-rayones, chupones, medias, etc.) De enviarlo usted se hace responsable del paquete y de cancelar nuestro costo de envio minimo.</td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                </table>
                                
                                
          </form>
          </div><!--FIN DE RECOLECTA DE MERCANCIA-->
          
          
          
          

          
          <div class="TabbedPanelsContent"><!--Reportar Pagos-->
          
          <form method="post" action="#">
          <table width="800" border="0">
              <tr>
                <td width="240" valign="top"><table width="240" border="0">
                  <tr>
                    <td width="86">Nº de deposito o transferencia</td>
                    <td width="144"><input type="text" name="numerop" id="numerop" /></td>
                  </tr>
                  <tr>
                    <td>Banco Emisor</td>
                    <td><select name="bancop" id="bancop">
                      <option>Mercantil</option>
                      <option>Banesco</option>
                      <option>Venezuela</option>
                      <option>Provincial</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td>Fecha de Transaccion</td>
                    <td><input type="text" name="fechap" id="fechap" /></td>
                  </tr>
                  <tr>
                    <td>Nombre del depositante</td>
                    <td><input type="text" name="nombredep" id="nombredep" /></td>
                  </tr>
                  <tr>
                    <td>Tu nombre</td>
                    <td><input type="text" name="nombrep" id="nombrep" /></td>
                  </tr>
                  </table></td>
                <td width="240" valign="top"><table width="240" border="0">
                  <tr>
                    <td width="86">Monto:</td>
                    <td width="144"><input type="text" name="montop" id="montop" /></td>
                  </tr>
                  <tr>
                    <td>Telefono:</td>
                    <td><input type="text" name="telefonop" id="textfield14" /></td>
                  </tr>
                  <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="emailp" id="textfield15" /></td>
                  </tr>
                  </table>
                  <table width="240" border="0">
                    <tr>
                      <td align="center">
                      <br />
                      <input type="hidden" name="clientep" value="<?php echo $cas; ?>"/>                    
                      <input type="submit" name="reportarpago" id="reportarpago" value="Reportar Pago" />
                      <br /></td>
                    </tr>
                  </table></td>
                <td width="296" valign="top">
             
                 <div id="Dir3">
                            <table width="290" border="0" align="center">
                              <tr>
                                <td width="248"><strong><font color="#FFFFFF">Para transferencias o depositos</font></strong></td>
                              </tr>
                              <tr>
                                <td>Banco Mercantil</td>
                              </tr>
                              <tr>
                                <td>0105 0086 901086100565</td>
                              </tr>
                              <tr>
                                <td>Dr.free Agencia de Aduanas C.A</td>
                              </tr>
                              <tr>
                                <td>RIF: J-30943606-6</td>
                              </tr>
                              <tr>
                                <td align="left" valign="baseline">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="baseline">Puedes pagar tu envio con tu cupo electronico</td>
                              </tr>
                              <tr>
                                <td align="center" valign="baseline"><img src="img/paypal.JPG" width="125" height="40" /></td>
                              </tr>
                              <tr>
                                <td align="left" valign="baseline">Contactanos al 0212 331 1154 Si no sabes como.</td>
                              </tr>
                              </table>
                            </div><!--FIN DE DIR-->
             		
                </td>
              </tr>
            </table>
          </form>
          
          
          
          
          
          
          
          
          </div><!--FIN DE REPORTAR PAGOS-->
          
          
        </div>
      </div>
    </div></td>
  </tr>
</table>








<?php
	}
	else
	{
?>

		<img src="img/usa.JPG" width="900" height="135" />
<br /><br />
			<table width="900" border="0">
			  <tr>
			    <td><table width="400" border="0" align="center">
			      <tr>
			        <td>

                    <div id="Login2">
                    <form action="validar.php" method="post">
                    	<br /><br /><br /><br /><br />
                  
                      <table width="263" border="0" align="center">
                        <tr>
                          <td width="207"><table width="200" border="0">
                            <tr>
                              <td><strong>Usuario</strong></td>
                              <td><input type="text" name="nick" id="nick" /></td>
                            </tr>
                            <tr>
                              <td><strong>Clave</strong></td>
                              <td><input type="password" name="pass" id="pass" /></td>
                            </tr>
                          </table></td>
                          <td width="46" align="center">
                          <input type=image src="img/check2.jpg" width="39" height="36">                          
                          </a></td>
                        </tr>
                      </table>
                      <table width="260" border="0" align="center">
                        <tr>
                          <td width="251" align="right"><a href="olvidar.php"><font color="#CC0000">Olvide mi Clave</font></a></td>
                        </tr>
                      </table>
                    </form> 
                    </div><!--FIN DE LOGIN"-->
                    
                    
                    
                    </td>
		          </tr>
		        </table></td>
			    <td><table width="400" border="0" align="center">
			      <tr>
			        <td><table width="400" border="0" align="center">
			          <tr>
			            <td align="center">
                        <span style="font-size:12px; color:#F60">
                         Si todavia no eres miembro de nuestra familia registrate ahora mismo,
                         </span>
                       </td>
		              </tr>
			          <tr>
			            <td align="center">
                        <span style="font-size:16px; color:#F60">
                        !Es muy facil, rapido y sin ningun costo!
                        </span>
                        </td>
		              </tr>
			          <tr>
			            <td align="center">
                        <span style="font-size:11px; color:#999">
                        Simplemente completa el siguiente formulario y en un momento seras parte de nuestra familia.
                        </span>
                        </td>
		              </tr>
			          <tr>
			            <td align="center"><a href="registro.php"><img src="img/registrate2.jpg" width="130" height="60" /></a></td>
		              </tr>
		            </table></td>
		          </tr>
		        </table></td>
		      </tr>
    </table>
    <?php
    }
	?>
    
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div><!--FIN DE MARCO CONTENIDO-->



<div id="Separacion"></div><!---->
<div id="MarcoDireccion">
  <table width="900" border="0" align="left">
    <tr>
      <td width="525" align="left"><em><strong>Drfree24 Transporte Importador C.A</strong></em></td>
      <td width="365"><table width="284" border="0" align="center">
        <tr>
          <td width="140"><em><strong>Desing By: Systems Admins C.A</strong></em></td>
          </tr>
      </table></td>
    </tr>
    </table>
</div>
<!--FIN de amrco direccion-->



</div><!--FIN DE MARCO GLOBAL-->




<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>