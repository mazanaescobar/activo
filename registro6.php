<?php

	$ideproveedores=$_POST['idproveedores'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$empresa=$_POST['empresa'];
	$email=$_POST['email'];

	require("connect_db.php");
	$checkpe=mysql_query("SELECT * FROM proveedores WHERE nombre='$nombre' and email='$email'");
	$check_pe=mysql_num_rows($checkpe);
		if($nombre==$nombre & $email==$email){
			if($check_pe>0){
				echo ' <script language="javascript">alert("Atencion, ya existe este proveedor");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO proveedores VALUES('', '$nombre', '$apellido', '$telefono', '$empresa', '$email')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Proveedor registrada con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Los datos son incorrectos';
		}

	
?>