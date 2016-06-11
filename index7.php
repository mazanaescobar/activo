<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reasignación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/azul.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- =============bontones para ingresar datos============================================================================ -->
<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Menú</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    
  </div>
   <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <a target="_blank" href="index2.php" class="btn btn-danger">Articulos</a>
      <a target="_blank" href="index3.php" class="btn btn-danger">Infraestructuras</a>
      <a target="_blank" href="index4.php" class="btn btn-danger">Bienes</a>
      <a target="_blank" href="index5.php" class="btn btn-danger">Personas</a>
      <a target="_blank" href="index6.php" class="btn btn-danger">Proveedores</a>
      <a target="_blank" href="index7.php" class="btn btn-danger">Reasignación</a>
      <a target="_blank" href="index8.php" class="btn btn-danger">Estado</a>
      
    </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- generar busqueda de articulos ================================================== -->	
<br>

<?php
			require("connect_db.php");
			$consulta1='select idarticulo,nombre,marca,modelo,encargado from articulos';
			$result1=mysql_query($consulta1);

		?>


		<select name="articulos" value="" style="width: 100px;">
			<option>Articulos</option>
			<?php
			while($fila1=mysql_fetch_row($result1))

				echo"<option value='".$fila1['0']."'>".$fila1['0'].'--'.$fila1['1'].'--'.$fila1['2'].'--'.$fila1['3'].'--'.$fila1['4']."</option>";
				?>
		</select>
<!-- generar busqueda de personas ================================================== -->	
  

<?php
			require("connect_db.php");
			$consulta='select idpersonas,cargo,nombre,apellido from personas';
			$result=mysql_query($consulta);

		?>


		<select name="personas" style="width: 100px;">
			<option value="">Personas</option>
			<?php
			while($fila=mysql_fetch_row($result))

				echo"<option value='".$fila['0']."'>".$fila['0'].'--'.$fila['1'].'--'.$fila['2'].'--'.$fila['3']."</option>";
				?>
		</select>


<!-- formulario de articulos================================================== -->
<hr class="soften"/>
<form method="post" action="" >
  <fieldset>

    <legend  style="font-size: 40pt"><b>Reguistro de reasignaciones</b></legend>

    <div class="form-group">
      <label style="font-size: 14pt">ID encargado actual</label>
      <input type="text" name="antiguo" class="form-control" required placeholder="Poner ID" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>ID del nuevo encargado</b></label>
      <input type="text" name="nuevo" class="form-control"  required placeholder="Poner ID"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>ID artículo</b></label>
      <input type="" name="articulo" class="form-control" required placeholder="Poner ID" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Motivo de la reasignación</b></label>
      <input type="text" name="asunto" class="form-control" required placeholder="asunto" />
    </div>
     <div class="form-group">
      <label style="font-size: 14pt"><b>Fecha</b></label>
      <input type="date" name="fecha" class="form-control" required placeholder="dd/mm/aa" />
    </div>
    
      
   
    <input  class="btn btn-success" type="submit" name="submit" value="Insertar"/>



  </fieldset>
</form>

<?php
		if(isset($_POST['submit'])){
			require("registro7.php");
		}
	?>



<!-- registrar articulo ================================================== -->
<hr class="soften"/><hr class="soften"/>

<h2> Reasignaciones ingresadas</h2>	
<a target="_blank" href="fpdf/tutorial/reasignados.php" class="btn btn-danger">Exportar a PDF</a> 

		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Reasignaciones</h4> 
		<div style="height: 300px;width: 925px; overflow-y: auto;">

		<div class="row-fluid">
		





			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM reasignado");
				$query=mysql_query($sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>ID reasignado</td>";
						echo "<td>antiguo</td>";
						echo "<td>nuevo</td>";
						echo "<td>articulo</td>";
						echo "<td>asunto</td>";
						echo "<td>fecha</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysql_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
				    	
				    	
				    	
				    	

				    	echo "<td><a href='actualizar7.php?idreasignado=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='index7.php?idreasignado=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM reasignado WHERE idreasignado=$idreasignado";
						$resborrar=mysql_query($sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='index7.php'</script>";
					}

			?>
			
				  
			  			  
			  
		
		
		<div class="span8">
		
		</div>	
		</div>
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->

	
		</div>

<!-- FPDF ================================================== -->
		

             

<!-- Footer
      ================================================== -->
<hr class="soften"/>

<footer class="footer">

<hr class="soften"/>
<p>  <br/><br/></p>
 </footer>
</div><!-- /container -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>