<?php
	
		

			$user = $_POST['user'];
			$pass = $_POST['password'];
		
			

		if ($user == 'drfree24' && $pass == 'drfree242014')
			{
				session_start();			
			$_SESSION['admin'] = $user ;
				
				header("location:home.php");
				
			}
			elseif ($user == 'almacen' && $pass == 'almacen2015')
			{
					session_start();			
				$_SESSION['admin'] = $user ;
				
				header("location:almacen.php");
			}
			else
			
			{
				
				header("location:../loginn.php");	
			}	
	
?>