<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/welcome/construccion/style.css") ?> >
</head>
<body>
	
	<h2>Sítio en construcción</h2>
	<h3>Trabajamos para tí</h3>
	<div class="divImgLogo">
		<img class="imgLogo" src=<?php echo base_url("content/img/generales/logo.png") ?> >
	</div>	
	
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript">	
	</script>
</body>
</html>