<?php

	$idinfra=$_POST['idinfra'];
	$codigo_bien= $_POST['codigo_bien'];
	$correlativo=$_POST['correlativo'];
	$nombre=$_POST['nombre'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$encargado=$_POST['encargado'];
	$precio=$_POST['precio'];
	$proveedor=$_POST['proveedor']; 
	$fecha=$_POST['fecha'];
	$estado=$_POST['estado'];
	

	require("connect_db.php");
	$checkar=mysql_query("SELECT * FROM articulos WHERE correlativo='$correlativo' and codigo_bien='$codigo_bien'");
	$check_ar=mysql_num_rows($checkar);
		if($correlativo==$correlativo & $codigo_bien==$codigo_bien){
			if($check_ar>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el correlativo del tipo de bien, verifique el correlativo");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO articulos VALUES('','$idinfra','$codigo_bien','$correlativo','$nombre', '$marca', '$modelo','$encargado', '$precio', '$proveedor', '$fecha', '$estado')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Articulo registrado con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Los datos son incorrectos';
		}

	
?>