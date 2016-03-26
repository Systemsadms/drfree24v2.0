<?php
session_start();
if ($_SESSION['admin'] == 'almacen')
{
include ("cnx.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facturas Almacen</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
</head>

<body>


<div id="Marcocosmo">
<div id="MarcoGlobal">



                <div id="modulotop">
                
                	<div id="logo"></div>
                    <div id="titulo">
                    Facturas de Almacen<br /><br />
                    CUTE v2.0
                    </div>
                
                
                </div><!--FIN DE modulotop-->
                
                
                <div id="menu">
                
 <div class="AJXMenuWJcNLQA"><!-- AJXFILE:menu/ajxmenu.css -->
 <div class="ajxmw1">
  <div class="ajxmw2">
<ul>
<li class="tfirst"><a href="home.php">Home</a></li>
                  
                     <li><a href="destruir.php"><font color="#0000FF">Cerrar Admin Center</font></a></li>
</ul>
  </div>
 </div>
 <br />
 
 
 
 
 
 
</div>
                                    
</div><!--FIN DE MARCO menu-->
                
                
                
                
                
                <div id="sparacion"></div><!--FIN DE  sparacion-->
                
                
                
                
                
                
                <div id="contenido">
                  <table width="530" border="0" align="center">
                    <tr>
                      <td width="433" align="center"><em><strong><font color="#999999">Facturas de Paquetes Pre-alertados</font></strong></em></td>
                    </tr>
                  </table>
                  
                   <br />
                   <?php
				$consulta = "SELECT * FROM facturas;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>ID Factura</b></td>";
				echo "<td bgcolor='#CCCCCC' align='center'><b>ID Cliente</b></td>";
				echo "<td align='center'><b>Nº de Factura</b></td>";
				echo "<td align='center'><b>Tracking</b></td>";
				echo "<td align='center'><b>Currier</b></td>";
				echo "<td align='center'><b>Fecha</b></td>";
				echo "<td align='center'><b>Descripcion</b></td>";
				echo "<td align='center'><b>Archivo</b></td>";



				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[5]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";				
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[6]."</td>";
				echo "<td align='center'>
				
				<a href='../facturas/".$reg[3].".pdf' target='_blank'>Ver Factura</a>
				
				</td>";


				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				   ?>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   <br />
    </div><!--FIN DE  contenido-->


</div><!--FIN DE MARCOMarcoGlobal-->
</div><!--FIN DE MARCO MarcocosmoGLOBAL-->



<?php			
}
else
{			
session_destroy();		
header("location:../index.php");	
}
?>	
</body>
</html>