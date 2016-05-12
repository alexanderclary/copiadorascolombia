 <?php 
$con=0;
?>
<div class="container caja1 sombra ">
	<div class="row ">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img1">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<a data-toggle="modal" data-target="#myModal" data-target=".bs-example-modal-sm">
					<img class="img-responsive img-boton1" src="<?php bloginfo('template_url'); ?>/images/botton.png" alt="copiadoras colombia">
					</a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs o">
					<img class="img-responsive " src="<?php bloginfo('template_url'); ?>/images/o.png" alt="copiadoras colombia">
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
						<input class="modal-text" type="text"  name="cuidad" placeholder="Cuidad" required="required">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<textarea class="modal-text" name="mensaje" placeholder="Mensaje"  required="required"></textarea>
					</div>
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<input type="submit" name="submit" value="Contactanos" class="boton" onClick="clic()">
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
