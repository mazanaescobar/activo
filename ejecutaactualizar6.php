<?php 


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update proveedores set nombre='$nombre', apellido='$apellido', telefono='$telefono', empresa='$empresa', articulo='$articulo' where idproveedores='$idproveedores'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: index6.php");
		
		echo "<script>location.href='index6.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='index6.php'</script>";

		
	}
?>
