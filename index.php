<?php
	ob_start('ob_gzhandler');
	header('Vary: Accept-Encoding');
	$cache_expire = 0;
	header("Pragma: private");
	header("Pragma: no-cache");
	header("Pragma: no-store");
	header('Expires: ' . date('D, d M Y H:i:s', time()+$cache_expire) . ' GMT');

	include('clases/config.php');
	include('clases/seguridad.php');
?>
<!DOCTYPE html>
<html lang="es-CO">
	<head>
		<?php if (file_exists("modulos/meta.php")){ include('modulos/meta.php'); } ?>
	</head>
	<body data-spy="scroll" data-target=".subnav" data-offset="50">
		<?php if (file_exists("modulos/loader.php")){ include('modulos/loader.php'); } ?>
		<nav>
			<?php if (file_exists("modulos/menu.php")){ include('modulos/menu.php'); } ?>
		</nav>
		<section class="row-fluid">
			<div class="span1"></div>
			<div class="span10">
				<?php if (file_exists("modulos/home.php")){ include('modulos/home.php'); } ?>
				<?php if (file_exists("modulos/nosotros.php")){ include('modulos/nosotros.php'); } ?>
				<?php if (file_exists("modulos/servicios.php")){ include('modulos/servicios.php'); } ?>
				<?php if (file_exists("modulos/politicas.php")){ include('modulos/politicas.php'); } ?>
				<?php if (file_exists("modulos/redes.php")){ include('modulos/redes.php'); } ?>
				<?php if (file_exists("modulos/contacto.php")){ include('modulos/contacto.php'); } ?>
			</div>
			<div class="span1"></div>
		</section>
	</body>
	<?php if (file_exists("modulos/scripts.php")){ include('modulos/scripts.php'); } ?>
</html>