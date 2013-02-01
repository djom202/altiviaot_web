<?php include('clases/seguridad.php'); ?>
<!DOCTYPE HTML>
<html lang="es-CO">
	<head>
		<?php if (file_exists("modulos/meta.php")){ include('modulos/meta.php'); } ?>
	</head>
	<body class="container-fluid" data-spy="scroll" data-target=".subnav" data-offset="50">							
		<?php if (file_exists("modulos/menu.php")){ include('modulos/menu.php'); } ?>
		<?php if (file_exists("modulos/home.php")){ include('modulos/home.php'); } ?>
		<?php if (file_exists("modulos/nosotros.php")){ include('modulos/nosotros.php'); } ?>
		<?php if (file_exists("modulos/servicios.php")){ include('modulos/servicios.php'); } ?>
		<?php if (file_exists("modulos/politicas.php")){ include('modulos/politicas.php'); } ?>
		<?php if (file_exists("modulos/contacto.php")){ include('modulos/contacto.php'); } ?>
	</body>
	<?php if (file_exists("modulos/scripts.php")){ include('modulos/scripts.php'); } ?>
</html>