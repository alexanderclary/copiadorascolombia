<?php 
$con=0;
?>
<?php
/*
Template Name: video
*/
  ?><div class="">
					<a data-toggle="modal" data-target="#myModal" data-target=".bs-modal-lg">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo.png" alt="pantallas interactivas">
					</a>
				

	</div>	



<div class="modal fade" id="mModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ponte en contacto con nosotros</h4>
      </div>
      <div class="modal-body ventana-men">
       
<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row ">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">	
				<form action="/gracias" method="POST">
			
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
						<input class="modal-text" type="text"  name="cuidad" placeholder="Ciudad" required="required">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<textarea class="modal-text" name="mensaje" placeholder="Mensaje"  required="required"></textarea>
					</div>
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<input type="submit" name="submit<?php $con+=1;?>" value="Contactanos" class="boton" >
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
</div>



