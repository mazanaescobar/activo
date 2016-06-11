<?php

	$idestado=$_POST['idestado'];
	$articulo=$_POST['articulo'];
	$asunto=$_POST['fecha_in'];
	$fecha_in=$_POST['telefono'];
	$horas=$_POST['horas'];
	$costo=$_POST['costo'];
	$fecha_sal=$_POST['fecha_sal'];
	$problema=$_POST['problema'];
	$tecnico=$_POST['etecnico'];

	require("connect_db.php");
	$checkpe=mysql_query("SELECT * FROM estado WHERE idstado='$idestado'");
	$check_pe=mysql_num_rows($checkpe);
		if($idestado==$idestado){
			if($check_pe>0){
				echo ' <script language="javascript">alert("Atencion, ya existe este registro");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO estadoVALUES('', '$articulo', '$asunto', '$fecha_in', '$horas', '$costo', '$fecha_sal', '$problema', '$tecnico')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Estado registrada con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Los datos son incorrectos';
		}

	
?>