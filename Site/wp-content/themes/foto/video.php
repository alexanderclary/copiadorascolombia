
<?php
/*
Template Name: video
*/
  ?>

					<a data-toggle="modal" data-target="#Modal" data-target=".bs-modal-lg">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo.png" alt="fotocopiadoras">
					</a>


<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ponte en contacto con nosotros</h4>
      </div>
      <div class="modal-body ventana-men">
       
<div class="row ">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row ">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">	
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input class="modal-text" type="text" name="nombre" placeholder="Nombre" required="required">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input class="modal-text" type="text" name="email" placeholder="Email" required="required">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input class="modal-text" type="text"  name="telefono" placeholder="Telefono" required="required">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<textarea class="modal-text" name="mensaje" placeholder="Mensaje"  required="required"></textarea>
					</div>
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<input type="submit" name="submitv" value="Contactanos" class="boton">
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
					</div>
					</form>	
		
</div>
</div>
</div>
     
    </div>
  </div>
</div>

<?php 
if(isset($_POST['submitv'])){

$destinatario = "miguel@claryla.com,alejandro@claryla.com,distribuidores@claryla.com"; 
$asunto = "copiadorascolombia.co"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Dato Copiadoras Colombia</title> 
</head> 
<body> 
<h1>Contacto Copiadoras Colombia</h1>
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