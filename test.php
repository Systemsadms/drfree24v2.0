<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style> 
/* estilo css */ 
#modal { left:50%; margin:-250px 0 0 -40%; opacity: 0; position:absolute; top:-50%; visibility: hidden; width:80%; box-shadow:0 3px 7px rgba(0,0,0,.25); box-sizing:border-box; transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -webkit-transition: all 0.4s ease-in-out;} 

/* Make the modal appear when targeted */ 
#modal:target { opacity: 1; top:50%; visibility: visible; } 
#modal .header,#modal .footer { border-bottom: 1px solid #e7e7e7; border-radius: 5px 5px 0 0; } 
#modal .footer { border:none; border-top: 1px solid #e7e7e7; border-radius: 0 0 5px 5px; }
#modal h2 { margin:0; } 
#modal .btn { float:right; } 
#modal .copy,#modal .header, #modal .footer { padding:15px; } 
.modal-content { background: #f7f7f7; position: relative; z-index: 20; border-radius:5px; } 
#modal .copy { background: #fff; } 
#modal .overlay { background-color: #000; background: rgba(0,0,0,.5); height: 100%; left: 0; position: fixed; top: 0; width: 100%; z-index: 10; }
</style>


</head>

<body>




<form action="#modal" method="post" name="forma7" >
 <input type="hidden" name="id" value="enrique"/> 
 <a href="javascript:document.forma7.submit();" >..TEST</a>
 </form>
 
 
 
 
 

    <?php
		
	
			if(isset($_POST['boton']))
			{
				echo "se envio el formulario";	
			}
            ?>
 
 
 <div id="modal"> 
 
 <div class="modal-content"> 
         <div class="header">
          <h2>Titulo de la ventana</h2> 
          </div>
   
          
   <div class="copy"> 
    <p style="text-align: center;">        		
         
         <?php
		 echo $_POST["id"];
		 ?>
            <form action="#" method="post">
            	<input type="submit" name="boton"/>
            </form>
    </p>
    </div>
    
    
     <div class="cf footer"> <a href="#">Cerrar</a> </div> </div> <div class="overlay"></div> </div> 



</body>
</html>