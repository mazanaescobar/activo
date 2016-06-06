<?php

	$idbienes=$_POST['idbienes'];
	$nombre=$_POST['nombre'];
	$tipo_de_bien=$_POST['tipo_de_bien'];
	

	require("connect_db.php");
	$checkbi=mysql_query("SELECT * FROM bienes WHERE idbienes='$idbienes'");
	$check_bi=mysql_num_rows($checkbi);
		if($idbienes=$nombre){
			if($check_bi>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el  bien, verifique el codigo");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO bienes VALUES('', '$nombre', '$tipo_de_bien')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Bien registrado con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Los datos son incorrectos';
		}

	
?>