<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
 
   <!-- METAS -->
   <meta charset="<?php bloginfo( 'charset' ); //cambiamos <meta charset="utf-8"> por su   ?>" />
   <!-- /METAS -->
 <link rel="shortcut icon" href="<?php bloginfo ( 'template_directory');?>/images/favicon.png">
 <meta name= "keywords" content="multifuncionales, fotocopiadoras, fotocopiadoras colombia, venta fotocopiadoras, fotocopiadoras bogota, fotocopiadora precios, impresoras multifuncionales, impresoras, renta de impresoras, equipos para oficina, fotocopiadoras toshiba, fotocopiadoras kyocera, fotocopiadoras minolta, fotocopiadoras ricoh, fotocopiadoras canon, fotocopiadoras hp, fotocopiadoras helwet pakard, fotocopiadoras lexmark, fotocopiadoras samsung, fotocopiadoras epson, venta y reparacion de fotocopiadoras, Insumos y repuestos fotocopiadoras, repuestos fotocopiadoras, mantenimiento de fotocopiadoras, impresoras venta y distribucion, venta de impresoras, mantenimiento de impresoras, impresoras venta, copiadoras toshiba, copiadoras kyocera, copiadoras minolta, copiadoras ricoh, copiadoras canon, copiadoras hp, copiadoras helwet pakard, copiadoras lexmark, copiadoras samsung, copiadoras epson, impresoras toshiba, impresoras kyocera, impresoras minolta, impresoras ricoh, impresoras canon, impresoras hp, impresoras helwet pakard, impresoras lexmark, impresoras samsung, impresoras epson.”
">
   <title><?php
        /*Con este código agregamos a wordpress un titulo que cambia dependiendo 
        * del lugar donde te encuentres en el blog. También puede utilizar <?php bloginfo('name'); ?>
        * Muestra en la etiqueta <title> el nombre de lo que está viendo, la forma en la que lo estamos creando
        * es mucho más amigable para los navegadores ya que muestra información de cada lugar que estés.
        */
        global $page, $paged;
 
        wp_title( '|', true, 'right' );
 
        // Agrega el nombre del blog.
        bloginfo( 'name' );
 
        ?>
   </title>
 
   <!-- CSS -->
   <link href='<?php bloginfo( 'stylesheet_url' ); ?>' rel="stylesheet" />
  <Link rel="stylesheet" href="<?php bloginfo ( 'template_directory');?>/css/bootstrap.css" type="text"/css medios="all" />
  <Link rel="stylesheet" href="<?php bloginfo ( 'template_directory');?>/css/cuerpo.css" type="text"/css medios="all" />
  <Link rel="stylesheet" href="<?php bloginfo ( 'template_directory');?>/css/contacto.css" type="text"/css medios="all" />
  <Link rel="stylesheet" href="<?php bloginfo ( 'template_directory');?>/css/nosotros.css" type="text"/css medios="all"> 
  <Link rel="stylesheet" href="<?php bloginfo ( 'template_directory');?>/css/video.css" type="text"/css medios="all" />
   <!-- /CSS -->
 
   <!-- RSS & PINGBACKS -->
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
   <!-- /RSS & PINGBACKS -->
 
   <?php /* Para compatibilizar HTML5 con navegadores antiguos */ ?>
   <!--[if IE]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
 
   <?php
        /*Siempre agrege wp_head antes del cierre de </ head> de su thema,
        * si no lo agrega puede que muchos plugins no funcionen ya que
        * lo utilizan este gancho (hook)para agregar elementos al head.
        */
           ?>
     <script type="text/javascript" src="<?php bloginfo ( 'template_directory');?>/js/jquery-1.12.0.min.js"></script>
   <script type="text/javascript" src="<?php bloginfo ( 'template_directory');?>/js/bootstrap.js"></script>
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73701970-4', 'auto');
  ga('send', 'pageview');

</script>
 <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<div id="fondo">
<body <?php body_class();?> id='fondo'>
<header>
<div class="container-fluid">
	 	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	 		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
	 		</div>
	 		<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 logo">
	 			<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/logo-copiadoras.png" alt="Copiadoras Colombia">
	 		</div>
	 	</div>
	 	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		 	<p class="text-head">Llamanos ahora: 547 35 89</p>
		 	<p class="text-head">Bogotá Colombia</p>
	 	</div>
</header>
	
	

