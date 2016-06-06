<?php

	$idpersonas=$_POST['idpersonas'];
	$cargo=$_POST['cargo'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$edificio=$_POST['edificio'];

	require("connect_db.php");
	$checkp=mysql_query("SELECT * FROM personas WHERE idpersonas='$nombre'");
	$check_p=mysql_num_rows($checkp);
		if($idpersonas=$nombre){
			if($check_p>0){
				echo ' <script language="javascript">alert("Atencion, ya existe esta persona el codigo");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO personas VALUES('', '$cargo', '$nombre', '$apellido', '$telefono', '$edificio')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Persona registrada con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Los datos son incorrectos';
		}

	
?>