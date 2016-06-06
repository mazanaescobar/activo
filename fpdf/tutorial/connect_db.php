<?php
	$link =mysql_connect("localhost","usuario","contraseña");
	if($link){
		mysql_select_db("activo",$link);
	}
?>