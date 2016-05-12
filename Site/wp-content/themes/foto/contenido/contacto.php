<?php 
/*
Template Name: contacto
*/
 ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caja-con">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titulo-con">
			<p class="nos-titulo1">Ponte en contacto con nosotros</p>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">	
				
			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 con menu">
						<input type="text" name="nombre" placeholder="Nombre" required>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 con">
						<input type="text" name="email" placeholder="Email" required>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 con final">
						<input type="text"  name="telefono" placeholder="Telefono" required>
					</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 con menu">
						<textarea name="mensaje" placeholder="Mensaje" required></textarea>
					</div>
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 con">
						<input type="submit" name="submit" value="Contactanos">
					</div>
						
			</div>
			</form>
		</div>

</div>


<?php 


		if(isset($_POST['submit'])){


$destinatario = "miguel@claryla.com,distribuidores@claryla.com,alejandro@claryla.com"; 
$asunto = "copiadorascolombia.co"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Nuevo dato desde copiadorascolombia.co</title> 
</head> 
<body> 
<h1>Copiadoras Colombia</h1>
 <p>Nombre:</p>
<p>'.$_POST["nombre"].'</p>
 <p>Email:</p>
<p>'.$_POST["email"].'</p>
 <p>telefono:</p>
<p>'.$_POST["telefono"].'</p>
 <p>mensaje:</p>
<p>'.$_POST["mensaje"].'</p>
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
 

mail($destinatario,$asunto,$cuerpo,$headers);
} 



?>
