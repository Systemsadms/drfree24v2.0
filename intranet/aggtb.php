
<?php

			$base="drfree24_bd";
			$tabla="guias";			
			$anadir="ALTER TABLE ";
			$anadir.=$tabla;
			$anadir.=" ADD estatus VARCHAR(100)";
			
			$conexion=mysql_connect ("localhost","root","root");
			mysql_select_db ($base, $conexion);
			
			if(mysql_query ($anadir ,$conexion)) {
			echo "<h2> A la tabla $tabla se le ha añadido un campo</h2><br>";
			}else{
			echo "<h2> No ha podido añadir</h2><br>";
			};
			
			mysql_close($conexion);


/*
require("../cnx.php");
/*
mysql_query("ALTER TABLE `images` 
ADD `alias` VARCHAR(140) NULL 
AFTER `title`");

mysql_query("ALTER TABLE guias ADD COLUMN 'test' varchar(100) NULL AFTER `dimensiones`")or die(mysql_error());
mysql_close($conexion);
echo "se ha creado el nuevo campo";
*/


?>
