<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Preguntas Frecuentes</title>
	<div class="logo">
	<!--
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>archivos/.interfaz/css/estilo.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>archivos/.interfaz/css/preguntas.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>archivos/.interfaz/css/d_preguntas.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>archivos/.interfaz/plugins/sweetalert/sweetalert.css">
	<script src="<?php echo base_url(); ?>archivos/.interfaz/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>archivos/.interfaz/plugins/popr/popr.min.js"></script>
	<script src="<?php echo base_url(); ?>archivos/.interfaz/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="<?php echo base_url(); ?>archivos/.interfaz/js/eventos.js?v=0.0.1"></script>
	<script src="<?php echo base_url(); ?>archivos/.interfaz/js/creditos.js?v=0.0.1"></script>
	<!--[if lt IE 9]>
		<script src='//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>
	<![endif]-->
</head>
<body BGCOLOR="#ffffff">
<header>
		<div class="cabecera">
			<div class="logo"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/imbiu.png" alt="IMBIU - Video marketing para tu inmueble"></div>
			<nav>
				<a href="./">Inicio</a>
				<a href="#que-es-imbiu">¿Qué es Imbiú?</a>
				<a href="#como-funciona">¿Cómo funciona?</a>
				<a href="preg_frecuentes">Preguntas frecuentes</a>
				<?php if ($this->session->logged_in): ?>
					<div data-id="menu-emergente-usr-2" class="usuario">
						<img src="<?php echo base_url(); ?>archivos/.interfaz/images/usuario.png" alt="">
						<div class="usr-menu" href="./panel"><?php echo $this->session->correo; ?> <img src="<?php echo base_url(); ?>archivos/.interfaz/images/fa.png" alt=""></div>
						<!--<a href="<?php echo base_url(); ?>c_usuario/salir">Cerrar sesión</a>-->
					</div>
					<div class="popr-box" data-box-id="menu-emergente-usr-2">
						<a href="<?php echo base_url(); ?>panel/creditos"><div class="popr-item estado-creditos"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/moneda.png" alt="">Créditos</div></a>
						<a href="<?php echo base_url(); ?>creditos"><div class="popr-item"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/fl.png" alt="">Recargar créditos</div></a>
						<a href="<?php echo base_url(); ?>panel/videos"><div class="popr-item"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/videos.png" alt="">Mis vídeos</div></a>
						<a href="<?php echo base_url(); ?>panel/cuenta"><div class="popr-item"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/config.png" alt="">Mi cuenta</div></a>
						<a href="<?php echo base_url(); ?>c_usuario/salir"><div class="popr-item"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/cerrar.png" alt="">Cerrar sesión</div></a>
					</div>
				<?php else: ?>
					<a href="./acceder">Iniciar sesión</a>
					<a href="./registro" class="boton">Registrarse</a>					
				<?php endif ?>

			</nav>

			<a href="#menu-movil" class="menu-opcion"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/menu.png"></a>
			<nav id="menu-movil">
		<h2>Menú</h2>
		<ul>
			<li><a href="./">Inicio</a></li>
			<li><a href="#que-es-imbiu">¿Qué es Imbiú?</a></li>
			<li><a href="#como-funciona">¿Cómo funciona?</a></li>
			<li><a href="v_pregfrec.php">Preguntas frecuentes</a></li>

			<?php if ($this->session->logged_in): ?>
				<div data-id="menu-emergente-usr-2-movil" class="usuario">
					<img src="<?php echo base_url(); ?>archivos/.interfaz/images/usuario.png" alt="">
					<div class="usr-menu" href="./panel"><?php echo $this->session->correo; ?> <img src="<?php echo base_url(); ?>archivos/.interfaz/images/fa.png" alt=""></div>
					<!--<a href="<?php echo base_url(); ?>c_usuario/salir">Cerrar sesión</a>-->
				</div>
				<div class="popr-box" data-box-id="menu-emergente-usr-2-movil">
					<a href="<?php echo base_url(); ?>panel/creditos"><div class="popr-item estado-creditos"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/moneda.png" alt="">Créditos</div></a>
					<a href="<?php echo base_url(); ?>creditos"><div class="popr-item"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/fl.png" alt="">Recargar créditos</div></a>
					<a href="<?php echo base_url(); ?>panel/videos"><div class="popr-item"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/videos.png" alt="">Mis vídeos</div></a>
					<a href="<?php echo base_url(); ?>panel/cuenta"><div class="popr-item"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/config.png" alt="">Mi cuenta</div></a>
				</div>
				<li><a href="<?php echo base_url(); ?>c_usuario/salir"><img src="<?php echo base_url(); ?>archivos/.interfaz/images/cerrar.png" alt="Cerrar sesión"> Cerrar sesión</a></li>
			<?php else: ?>
				<li><a href="./acceder">Iniciar sesión</a></li>
				<li><a href="./registro">Registrarse</a></li>
			<?php endif ?>
		</ul>
	</nav>
</header>
<div background="#ffffff">
<ul class="preguntas">
<li>
	<a href="#"><span class="ca-icon">?</span>
	<div class ="ca-content">
		<h2 class ="ca-main">Cuantos creditos debo tener como minimo para un video?</h2>
		<h3 class="ca-sub">Cada video necesita un minimo de 10 creditos,una vez registrado(a) podra adquirirlos en su bandeja de usuario  </h3>
	</div>
	</a>
	</li>

<li>
	<a href="#"><span class="ca-icon">?</span>
	<div class ="ca-content">
		<h2 class ="ca-main">Cuantos videos puedo hacer al dia?</h2>
		<h3 class="ca-sub">Dependiendo de la cantidad de creditos que haya comprado y usado hasta el momento de crear el nuevo video </h3>
	</div>
	</a>
	</li>

	<li>
	<a href="#"><span class="ca-icon">?</span>
	<div class ="ca-content">
		<h2 class ="ca-main">Necesito comprar creditos para hacer mis videos?</h2>
		<h3 class="ca-sub">Si,ya que cada video tiene un "costo"de 10 creditos en el modo pago </h3>
	</div>
	</a>
	</li>	
	<li>
	<a href="#"><span class="ca-icon">?</span>
	<div class ="ca-content">
		<h2 class ="ca-main">Cuales son los medios de pago que se aceptan?</h2>
		<h3 class="ca-sub">Se aceptan tarjetas de credito o debito visa, tambien pagos por transferencia bancaria o depositos </h3>
	</div>
	</a>
	</li>	
<li>
<a href="#"><span class="ca-icon">?</span>
	<div class ="ca-content">
		<h2 class ="ca-main">Cuanto tardan en activarse si realizo una recarga de creditos?</h2>
		<h3 class="ca-sub"> Si recarga desde su tarjeta visa estaran activos de inmediato,si lo hace por transferencia/deposito debera esperar 12hrs</h3>
	</div>
	</a>
</li>
<li>
	<a href="#"><span class="ca-icon">?</span>
	<div class ="ca-content">
		<h2 class ="ca-main">Cuantas imagenes puedo colocar en un video?</h2>
		<h3 class="ca-sub">Una por área del inmueble que desee vender o alquilar  </h3>
	</div>
	</a>
</li>
</ul>
</div>
</body>