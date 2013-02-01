<?php
	$_SESSION['link'] = mysql_connect("127.0.0.1","root",""); 
	if(!$_SESSION['link']){ 
		$my_error='Conexion NO exitosa.<br/>'.mysql_error();
		header('location: ../errores/no_url.php?error='.$my_error);
	}else{ mysql_select_db("altiviaot_web", $_SESSION['link']); }
?>