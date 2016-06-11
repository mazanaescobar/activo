<?php

	$idreasignado=$_POST['idreasignado'];
	$antiguo=$_POST['antiguo'];
	$nuevo=$_POST['nuevo'];
	$articulo=$_POST['articulo'];
	$asunto=$_POST['asunto'];
	$fecha=$_POST['fecha'];
	

	require("connect_db.php");
	$checkre=mysql_query("SELECT * FROM reasignado WHERE fehca='$fecha'");
	$check_re=mysql_num_rows($checkre);
		if($idreasignado==$idreasignado){
			if($check_re>0){
				echo ' <script language="javascript">alert("Atencion, ya existe la reasignación");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO reasignado VALUES('', '$antiguo', '$nuevo', '$articulo', '$asunto', '$fecha')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Registrada con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Los datos son incorrectos';
		}

	
?>