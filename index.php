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
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="rotador/ajximagerotator.css" type="text/css" />
<script src="rotador/ajximagerotator.js" type="text/javascript"></script>
</head>

<body>

<div id="MarcoGlobal">


<div id="MarcoHead">
<div id="Logo"></div>




<div id="Dir">
<div id="separacionlogin">
<?php

if (isset($_POST["nick"]))
{

	$nick	= 	$_POST['nick'];
	$pass	=	$_POST['pass'];
	
			require("cnx.php");
			$ssql = "SELECT * FROM casilleros WHERE nick='$nick' and pass='$pass'";
			$rs = mysql_query($ssql,$conexion);
			
			if (mysql_num_rows($rs)==1)
			{
				session_start();
				$_SESSION["login"] = $nick;	
				?>
                <script type="text/javascript">
				window.location="micuenta.php";
				</script>
                      
                <?php
				mysql_close($conexion);				
			}
			else
			{				
				echo "El usuario y la contraseña colocado es incorrecto";
			} 	
			
}			
?>

</div><!--FIN DE DIR SEPARACION-->


				<?php
				
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
			?>
</div><!--FIN DE DIR-->


<div id="social">
  <table width="300" border="0" align="center">
    <tr>
      <td>
      <br />
      <table width="200" border="0" align="center">
        <tr>
          <td width="50"><a href="#"><img src="img/twitter.jpg" width="48" height="45" /></td>
          <td width="87"><a href="#"><img src="img/face.jpg" width="45" height="40" /></td>
          <td width="16"><a href="#"><img src="img/play.jpg" width="45" height="40" /></td>
          <td width="19"><a href="#"><img src="img/ven.jpg" width="45" height="40" /></td>
          <td width="19"><a href="#"><img src="img/ban.jpg" width="55" height="45" /></td>
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
      <td><a href="galerias.php"><img src="img/galeria.png" width="124" height="48" style="opacity:1;filter:alpha(opacity=100)"
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



<div id="MarcoBanner">

	<div id="rotador">
    
    			<div class="AJXIRfcGJSQA"><!-- AJXFILE:rotador/ajximagerotator.css -->
<div class="AJXIRfcGJSQApics">
 <ul class="AJXIRfcGJSQAul">
  <li class="AJXIRfcGJSQAli"><a href="#"><img class="AJXIRfcGJSQAimg" src="rotador/rotador1.jpg" alt="rotador1.jpg" /></a></li>
  <li class="AJXIRfcGJSQAlihide"><a href="#"><img class="AJXIRfcGJSQAimg" src="rotador/img4.png" alt="img4.png" /></a></li>
  <li class="AJXIRfcGJSQAlihide"><a href="#"><img class="AJXIRfcGJSQAimg" src="rotador/img1.jpg" alt="img1.jpg" /></a></li>
  <li class="AJXIRfcGJSQAlihide"><a href="#"><img class="AJXIRfcGJSQAimg" src="rotador/img2.png" alt="img2.png" /></a></li>
  <li class="AJXIRfcGJSQAlihide"><a href="#"><img class="AJXIRfcGJSQAimg" src="rotador/img3.png" alt="img3.png" /></a></li>
 </ul>
</div>
<br />
</div>
    
    
    
    </div><!--FIN DE ROTADOR-->

    
    
    <div id="botones">
    
      <table width="240" border="0" align="left">
        <tr>
          <td><a href="registro.php"><img src="img/registrate.jpg" width="240" height="58" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
        </tr>
        <tr>
          <td><a href="#"><a href="compraenusa.php"><img src="img/comprasonline.jpg" width="240" height="58" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
        </tr>
        <tr>
          <td><a href="#"><img src="img/envios.jpg" width="240" height="58" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></td>
        </tr>
        <tr>
          <td><a href="#"><img src="img/recibelo.jpg" width="240" height="58" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></td>
        </tr>
      </table>
    </div><!--FIN de BOTONES-->
    
    
    
     
    
    <div id="tracking">    
    <div id="tracking2">
    				
                    <div id="separacion2"></div>
    
					<div id="TabbedPanels1" class="TabbedPanels">
                        <ul class="TabbedPanelsTabGroup">
                          <li class="TabbedPanelsTab" tabindex="0"><strong>Tracking</strong></li>
</ul>
                        <div class="TabbedPanelsContentGroup">
                          <div class="TabbedPanelsContent">
                         		 <br />
                                 Introduce el numero de tracking.
                                 <br />
                                 <form>
                                   <table width="200" border="0">
                                     <tr>
                                       <td width="181"><input name="textfield" type="text" id="textfield" size="25" /></td>
                                       <td width="44"><img src="img/ok.jpg" width="33" height="23" /></td>
                                     </tr>
                                   </table>
                                 </form>
                                 <br />
                          </div>
</div>
                      </div>
                      
                      <!-------------------------------TABLA DOS ------------------------------------------------------------>
                      
                      <div id="separacion2"></div>
                       <div id="textotracking"><strong>Calcula tu Envio</strong></div>
                       <div id="TabbedPanels2" class="TabbedPanels">
                         <ul class="TabbedPanelsTabGroup">
                           <li class="TabbedPanelsTab" tabindex="0"><strong>Aereo</strong></li>
                           <li class="TabbedPanelsTab" tabindex="0"><strong>Maritimo</strong></li>
                         </ul>
                         <div class="TabbedPanelsContentGroup">
                           <div class="TabbedPanelsContent2">
                     
                           			 
        <?php
//-------------------------------------------------------------------------------------------------------------------------	   	
		if (isset($_POST['aereo']))
		{
			$largo 	= $_POST['largo'];
			$ancho 	= $_POST['ancho'];
			$alto 	= $_POST['alto'];
			$peso 	= $_POST['peso'];
			
			$pv 	= $largo * $ancho * $alto / 166 ;
			
				if($pv > $peso)
				{					
						$costo = $pv * 1080;
						
						
						if($costo < "1080")
						{
						$precio = "1080.00";
						$final  = number_format($precio,2,".",",");
						
						}else
						{
						$precio = $costo;
						$final  = number_format($precio,2,".",",");					
						}
						
						echo "El costo estimado de su envio aereo es de" . " " . "<b>".$final  . " Bsf.";
						?>
                        <br /><br />
                        <table border="0" align="center">
                        	<tr>
                            	<td> <a href="index.php"><img src="img/atras.jpg" width="70" height="20" /></a></td>
                            </tr>                        
                        </table>                       
                        <br /><br />
                        <?php  
				}
				else
				{
					
					$costo = $peso * 1080;
					
					if($costo < "1080")
						{
						$precio = "1080.00";
						$final  = number_format($precio,2,".",",");
						
						}else
						{
						$precio = $costo;
						$final  = number_format($precio,2,".",",");					
						}
 
				echo "EL costo estimado de su envio aereo es de" . " " . "<b>" . $final . " BsF." . "</b>";
						?>
                        <br /><br />
                        <table border="0" align="center">
                        	<tr>
                            	<td> <a href="index.php"><img src="img/atras.jpg" width="70" height="20" /></a></td>
                            </tr>                        
                        </table>                       
                        <br /><br />
                        <?php  
				}
		
		
		
		}
		elseif (isset($_POST['maritimo']))
		{
		
		
						$largo 	= $_POST['largo'];
						$ancho 	= $_POST['ancho'];
						$alto 	= $_POST['alto'];
						
						$cuft 	= $largo * $ancho * $alto / 1728 ;
						
						$costo = $cuft * 25;
						$final  = number_format($costo,2,".",",");
			
 				echo "EL costo estimado de su envio martimo es de" . " " . "<b>". $final*80 . " bs." . "</b>"; 
						?>
                        <br /><br />
                        <table border="0" align="center">
                        	<tr>
                            	<td> <a href="index.php"><img src="img/atras.jpg" width="70" height="20" /></a></td>
                            </tr>                        
                        </table>                       
                        <br /><br />
                        <?php 
						
             
           
                            
			}
			else
			{
                            
               ?>	             
                            	 
                                 <form method="post" action="#">
                                   <table width="200" border="0">
                                     <tr>
                                       <td width="30">Alto</td>
                                       <td width="9">&nbsp;</td>
                                       <td width="30">Largo</td>
                                       <td width="9">&nbsp;</td>
                                       <td width="30">Ancho</td>
                                       <td width="20">&nbsp;</td>
                                       <td width="42">Peso</td>
                                     </tr>
                                     <tr>
                                       <td><input name="alto" type="text" id="alto" size="2" /></td>
                                       <td>x</td>
                                       <td><input name="largo" type="text" id="largo" size="2" /></td>
                                       <td>x</td>
                                       <td><input name="ancho" type="text" id="ancho" size="2" /></td>
                                       <td>&nbsp;</td>
                                       <td><input name="peso" type="text" id="peso" size="4" /></td>
                                     </tr>
                                   </table>
                                   <table width="200" border="0">
                                     <tr>
                                       <td align="center"><input name="aereo" type="submit" value="Calcular" /></td>
                                     </tr>
                                   </table>
                             </form>
              <?php               
                             }
					
		?>
                                 
                           </div>
                           <div class="TabbedPanelsContent">
                           
                           
                           
                           
                           
                                <form method="post" action="#">
                                   <table width="200" border="0" align="center">
                                     <tr>
                                       <td width="30">Alto</td>
                                       <td width="9">&nbsp;</td>
                                       <td width="30">Largo</td>
                                       <td width="9">&nbsp;</td>
                                       <td width="30">Ancho</td>
                                     </tr>
                                     <tr>
                                       <td><input name="alto" type="text" id="alto" size="2" /></td>
                                       <td>x</td>
                                       <td><input name="largo" type="text" id="largo" size="2" /></td>
                                       <td>x</td>
                                       <td><input name="ancho" type="text" id="ancho" size="2" /></td>
                                     </tr>
                                   </table>
                                   <table width="200" border="0" align="center">
                                     <tr>
                                       <td align="center"><input name="maritimo" type="submit" value="Calcular" id="maritimo" /></td>
                                     </tr>
                                   </table>
                             </form>
                           
                           
                           
                           
                           </div>
                         </div>
                       </div>
    </div>
    <!--FIN DE TRACKING2-->
    </div><!--FIN DE TRACKING-->
</div><!--FIN DE MARCO BANNR-->



<div id="MarcoContenido">

    <div id="contenido">
    			<table width="650" border="0" align="center">
                      <tr>
                        <td><a href="#"><img src="img/banner.jpg" width="645" height="175" /></td>
                      </tr>
                      <tr>
                        <td><table width="650" border="0" align="center">
                          <tr>
                            <td><a href="#"><img src="img/img1.jpg" width="318" height="185" /></td>
                            <td><a href="#"><img src="img/img2.jpg" width="318" height="185" /></td>
                          </tr>
                          <tr>
                            <td><a href="#"><img src="img/img3.jpg" width="318" height="185" /></td>
                            <td><a href="#"><img src="img/img4.jpg" width="318" height="185" /></td>
                          </tr>
                        </table></td>
                      </tr>
      </table>


    </div><!--FIN DE CONTENDIO-->
    
    
    
    
    <div id="twitter">
    
      <a class="twitter-timeline" href="https://twitter.com/drfree24pp" data-widget-id="341970537477722112">Tweets por @drfree24pp</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    
    </div><!--FIN DE TWITTER-->
    
    
    
    
    
    
    
    

</div><!--FIN DE MARCO CONTENDIO-->






<div id="Separacion"></div><!---->
<div id="MarcoDireccion">
  <table width="900" border="0" align="left">
    <tr>
      <td width="525" align="left"><em><strong><a href="login.php">Drfree24 Transporte Importador C.A</a></strong></em></td>
      <td width="365"><table width="284" border="0" align="center">
        <tr>
          <td width="140"><a href="https://www.systemsadms.com"><strong><em>Desing By: Systems Admins C.A</em></strong></a></td>          
          </tr>
      </table></td>
    </tr>
    </table>
</div>
<!--FIN de amrco direccion-->



</div><!--FIN DE MARCO GLOBAL-->




<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
</script>
</body>
</html>