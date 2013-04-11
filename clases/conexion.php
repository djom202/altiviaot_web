<?php
	if(defined('env') == 'development'){
		$_SESSION['link'] = mysql_connect("127.0.0.1","root","");
		if(!$_SESSION['link']){
			header('location: error/not_connection_db.php');
		}else{
			$bd_select = mysql_select_db("altiviaot_web",$_SESSION['link']);
			if (!$bd_select) { header('location: error/not_found_db.php'); }
		}
	}elseif(defined('env') == 'production'){
		$_SESSION['link'] = mysql_connect("probandoando.com","probando_web","3014442072");
		if(!$_SESSION['link']){
			header('location: error/not_connection_db.php');
		}else{
			$bd_select = mysql_select_db("probando_home",$_SESSION['link']);
			if (!$bd_select) { header('location: error/not_found_db.php'); }
		}
	}
?>