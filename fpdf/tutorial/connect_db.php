<?php
	$link =mysql_connect("localhost","usuario","contraseña");
	if($link){
		mysql_select_db("activo",$link);
	}
	//exite otro connect_db.php en la ruta fpdf/tutoriales/connect_db.php que sirve para la conección del arcvibo pdf que genera los reportes
?>