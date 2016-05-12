<?php 
/*
Template Name: contacto
*/
$con=0;
 ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caja-con">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titulo-con">
			<p class="nos-titulo1">Ponte en contacto con nosotros</p>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
		<form action="/gracias" method="POST">
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
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 con final">
						<input type="text"  name="cuidad" placeholder="Cuidad" required>
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
