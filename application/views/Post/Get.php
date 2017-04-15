<!DOCTYPE html>
<html>
<head>
	<title>Titulo</title>
	<?php
		$this->load->view("parts/head.php");
	?>
</head>
<body>
	<div class="row marginNull divHead">
		
	</div>
	<div class="col-lg-3">
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
				<?php echo $datos->post->content ?>
			</div>
		</div>
		<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-format="autorelaxed"
	     data-ad-client="ca-pub-7161297069626668"
	     data-ad-slot="2283792231"></ins>	
	</div>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<script>
	     (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</body>
</html>