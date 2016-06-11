<?php 


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update estado set articulo='$articulo', asunto='$asunto', fecha_in='$fecha_in', horas='$horas', costo='$costo', fecha_sal='$fecha_sal', problema='$problema', tecnico='$tecnico' where idestado='$idestado'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: index8.php");
		
		echo "<script>location.href='index8.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='index8.php'</script>";

		
	}
?>
