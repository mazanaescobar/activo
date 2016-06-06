<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update articulos set infraestructura='$infraestructura', codigo_bien='$codigo_bien', correlativo='$correlativo', nombre='$nombre', marca='$marca', modelo='$modelo', encargado='$encargado', precio='$precio', fecha_compra='$fecha_compra' where idarticulo='$idarticulo'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: index2.php");
		
		echo "<script>location.href='index2.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='index2.php'</script>";

		
	}
?>

