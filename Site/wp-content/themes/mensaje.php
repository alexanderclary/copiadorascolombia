 <?php 
$con=0;
?>
<div class="container caja1 sombra ">
	<div class="row ">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img1">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<a data-toggle="modal" data-target="#myModal" data-target=".bs-example-modal-sm">
					<img class="img-responsive img-boton1" src="<?php bloginfo('template_url'); ?>/images/botton.png">
					</a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs o">
					<img class="img-responsive " src="<?php bloginfo('template_url'); ?>/images/o.png">
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 llam">
					<p class="llamada">LLAMANOS 5473589</p>
					<p class="llamada">BOGOTA, COLOMBIA</p>
				</div>
			</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 espacio-fo" >
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ponte en contacto con nosotros</h4>
      </div>
      <div class="modal-body ventana-men">
       
<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row ">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">	
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input class="modal-text" type="text" name="nombre" placeholder="Nombre" >
						<?php echo $errors[1]; ?>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input class="modal-text" type="text" name="email" placeholder="Email" required="required">
						<?php echo $errors[2]; ?>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input class="modal-text" type="text"  name="telefono" placeholder="Telefono" required="required">
						<?php echo $errors[3]; ?>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<textarea class="modal-text" name="mensaje" placeholder="Mensaje"  required="required"></textarea>
						<?php echo $errors[4]; ?>
					</div>
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<input type="submit" name="submit<?php $con+=1;?>" value="Contactanos" class="boton" onClick="clic()">
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
					</div>
					</form>	
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
</div>
      </div>
     
    </div>
  </div>
</div>


<?php 

if(isset($_POST['submit1'])):
	$errors=array();
	
	if(!isset($_POST['nombre'])):
		$errors[1]='<span class="error">Ingrese su nombre</span>';
			echo $errors[1];
	
		elseif(!isset($_POST['email']) or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\-\.]+$/", $_POST['email'])):
			
				$errors[2]='<span class="error">Ingrese su correo correcto</span>';
		elseif (!isset($_POST['telefono'])):

				$errors[3]='<span class="error">Ingrese su telefono</span>';

		elseif (!isset($_POST['mensaje'])):
			
			$errors[4]='<span class="error">Ingrese su mensaje</span>';
	endif;
endif;



		if(isset($_POST['submit1'])){


$destinatario = "miguel@claryla.com,distribuidores@claryla.com";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "X-Mailer: PHP5\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$asunto ="copiadoracolombia";
$cuerpo=' 
<html> 
<head> 
   <title>Contacto SmartBoards</title> 
</head> 
<body> 
<h1>Contacto SmartBoards</h1>
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

mail($destinatario,$asunto,$cuerpo,$headers);
echo 'error';
} 



?>

