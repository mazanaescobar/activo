<?php

	$idinfra=$_POST['idinfra'];
	$nombre= $_POST['nombre'];
	$ubicacion=$_POST['ubicacion'];
	
	

	require("connect_db.php");
	$checkin=mysql_query("SELECT * FROM infraestructuras WHERE nombre='$nombre' and ubicacion='$ubicacion'");
	$check_in=mysql_num_rows($checkin);
		if($nombre==$nombre & $ubicacion==$ubicacion){
			if($check_in>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el nombre, verifique el nombre");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO infraestructuras VALUES('','$nombre','$ubicacion')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("infraestructura registrado con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Los datos son incorrectos';
		}

	
?>