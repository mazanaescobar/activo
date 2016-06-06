<?php

	$ideproveedores=$_POST['idproveedores'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$empresa=$_POST['empresa'];
	$articulo=$_POST['articulo'];

	require("connect_db.php");
	$checkpe=mysql_query("SELECT * FROM proveedores WHERE nombre='$nombre' and articulo='$articulo'");
	$check_pe=mysql_num_rows($checkpe);
		if($nombre==$nombre & $articulo==$articulo){
			if($check_pe>0){
				echo ' <script language="javascript">alert("Atencion, ya existe este proveedor");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO proveedores VALUES('', '$nombre', '$apellido', '$telefono', '$empresa', '$articulo')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Proveedor registrada con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Los datos son incorrectos';
		}

	
?>