<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update personas set cargo='$cargo', nombre='$nombre', apellido='$apellido', telefono='$telefono', edificio='$edificio' where idpersonas='$idpersonas'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: index5.php");
		
		echo "<script>location.href='index5.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='index5.php'</script>";

		
	}
?>

