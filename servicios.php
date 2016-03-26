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
	<?php
		/*		
                if (isset($_SESSION["login"]))
                    {
                        $micuenta=$_SESSION["login"];
						?>
				<table width="150" border="0" align="center">
							  <tr>
							    <td width="67" align="center"><img src="img/user.jpg" width="25" height="25" /></td>
							    <td width="123">Hola, <?php echo $micuenta; ?></td>
						      		</tr>
								  </table>
									<table width="170" border="0" align="center">
									 <tr>
							    <td width="91" align="center"><a href="micuenta.php"><img src="img/midrfreebtn.jpg" width="73" height="17" /></a></td>
							    <td width="99" align="center"><a href="destruir.php"><img src="img/cerrar.jpg" width="73" height="17" /></a></td>
						      </tr>
	 							 </table>
	  
						<?php
                    }
					else
					{
					?>
  					<table width="300" border="0" align="center">
   					 <tr>
    				  <td>
     				 <form method="post" action="#">
                        <table width="300" border="0" align="center">
                        <tr>
                          <td width="25"><img src="img/user.jpg" width="25" height="25" /></td>
                          <td width="39">Usuario</td>
                          <td width="66"><input name="nick" type="text" id="ncik" size="8" /></td>
                          <td width="34">Clave</td>
                          <td width="75"><input name="pass" type="password" id="pass" size="8" /></td>
                          <td width="35">
                         
                          <input type=image src="img/check.JPG" width="29" height="23"/>     
                          </td>
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
                        <?php
                                }
							*/	
                        ?>
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


<div id="MarcoContenidoservicios">

<table width="730" border="0">
  <tr>
    <td width="11">&nbsp;</td>
    <td width="275" valign="top"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><br /><br />Envié sus paquetes a nuestro almacén ubicado en la ciudad de Miami, y la misma será transportada, de forma rápida y con total seguridad hasta Venezuela, en vuelos que tienen una frecuencia de 2 salidas semanales, específicamente los martes y sábados. Contando con un tiempo de entrega estimado, en La guaira , de 05 a 08 días hábiles.</p>
      <p>Una vez su carga termine el proceso de aduana, la misma podrá ser retirada en nuestras oficinas ubicadas en La guaira o entregada en su casa u oficina. También podemos hacerle llegar su paquete a cualquier parte del país (INTERIOR), mediante envíos internos, bajo la modalidad de cobro en destino, con las empresas de encomiendas nacionales más reconocidas, pudiendo rastrear su envío a través de sus respectivas páginas web.</p></td>
    <td width="152">&nbsp;</td>
    <td width="274" valign="top"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><br /><br />Despachos de los puertos de Miami en la Florida y de Port Everglades en Fort Lauderdale:<br />
        <br />
        <strong>Marítimo Regular (DTD)</strong>: con salidas cada 2 semanas,   específicamente la segunda y cuarta semana de cada mes, tiene un tiempo   de travesía de 3 a 4 semanas desde la confirmación de salida del buque   del puerto. En esta modalidad Dr.Free24 se ocupa de todo el proceso de   aduana de su carga. Para este tipo de envío no se toma en cuenta el peso   de la carga, sólo el volumen.<br />
        <br />
        <strong>Marítimo Consolidado (LCL)</strong>: con salidas cada fin de   semana, tiene un tiempo de travesía de 5 a 6 días desde la confirmación   de salida del buque del puerto. Los documentos de nacionalización son   enviados directamente al cliente o a su agente aduanal. Para este tipo   de envío se toma en cuenta el espacio ocupado por la carga en metros   cúbicos dentro del contenedor.<br />
        <br />
        <strong>Full Container (FCL)</strong>: con salidas cada fin de semana,   tiene un tiempo de travesía de 5 a 6 días desde la confirmación de   salida del buque del puerto. Los documentos de nacionalización son   enviados directamente al cliente o a su agente aduanal.<br />
        <br />
        <strong>Carga Pesada</strong>: contamos con transporte y logística de equipos, camiones, tractores y maquinarias pesadas.</p></td>
  </tr>
</table>



</div><!--MarcoContenidoservicios-->
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