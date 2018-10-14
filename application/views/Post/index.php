<!-- <pre>
<?php 
//print_r($datos->post);
?>	
</pre> -->

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $datos->post->title ?></title>
	<?php
		$this->load->view("parts/head.php");
	?>

	<meta name="description" content="Aprende sobre el integrado CD4511B mediante un pequeño proyecto practico en el que introducimos un binario y este pasa a ser decimal">
</head>
<body>
	<div class="row marginNull divHead">
		<div class="menuPrincipal">
			<ul>
				<li>
					<a href="http://www.ritsasv.com">Inicio</a>
				</li>
				<li>
					<a href="http://www.ritsasv.com/cursos-gratuitos/">Cursos gratuitos</a>
				</li>
				<li>
					<a href="http://www.ritsasv.com/donaciones/">Donaciones</a>
				</li>
				<li>
					<a href="http://www.ritsasv.com/electronica/">Electronica</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="row anuncioNavegacion">
			<!-- Prueba2 -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-7161297069626668"
			     data-ad-slot="8550651839"
			     data-ad-format="auto"></ins>
		</div>
		<div class="navegacion">
			<div class="titulo">
				<h3>Navegacion</h3>
				<div class="row marginNull menuNavegacion">
					<ul>
						<li>Compra materiales de alta calidad</li>
						<li>Realiza siempre una simulación</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-9">
		<div class="contenedorCuerpo">
			<div class="titulo">
				<h2><?php echo $datos->post->title ?> </h2>		
			</div>
			<div class="cuerpo">
				<div class="row marginNull">
					<!-- Contenido Arriba -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-7161297069626668"
					     data-ad-slot="9329381030"
					     data-ad-format="auto"></ins>
						
				</div>
				
				<?php echo $datos->post->content ?>

				<div class="row marginNull anuncio">
					<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-format="autorelaxed"
				     data-ad-client="ca-pub-7161297069626668"
				     data-ad-slot="2283792231"></ins>	
				</div>
			</div>
		</div>
		
	</div>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	     (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</body>
</html>