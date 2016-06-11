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
    <title>Activo fijo uls</title>
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
	//<img src="imagen/pascomputacion.jpg" class="img-responsive">
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
 <!-- generar busqueda de personas ================================================== -->	
  <br>

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

<!-- generar busqueda de infraestructuras ================================================== -->	


<?php
			require("connect_db.php");
			$consulta1='select idinfra,nombre,ubicacion from infraestructuras';
			$result1=mysql_query($consulta1);

		?>


		<select name="infraestructuras" style="width: 135px;">
			<option value="">Infraestructuras</option>
			<?php
			while($fila1=mysql_fetch_row($result1))

				echo"<option value='".$fila1['0']."'>".$fila1['0'].'--'.$fila1['1'].'--'.$fila1['2']."</option>";
				?>
		</select>

<!-- generar busqueda de bienes ================================================== -->	


<?php
			require("connect_db.php");
			$consulta2='select idbienes,nombre from bienes';
			$result2=mysql_query($consulta2);

		?>


		<select name="bienes" style="width: 125px;">
			<option value="">tipo de bienes</option>
			<?php
			while($fila2=mysql_fetch_row($result2))

				echo"<option value='".$fila2['0']."'>".$fila2['0'].'--'.$fila2['1']."</option>";
				?>
		</select>


<!-- generar busqueda de proveedores ================================================== -->	


<?php
			require("connect_db.php");
			$consulta3='select idproveedores,nombre,apellido,empresa from proveedores';
			$result3=mysql_query($consulta3);

		?>


		<select name="proveedores" style="width: 135px;">
			<option value="">proveedores</option>
			<?php
			while($fila3=mysql_fetch_row($result3))

				echo"<option value='".$fila3['0']."'>".$fila3['0'].'--'.$fila3['1'].'--'.$fila3['2'].'--'.$fila3['3']."</option>";
				?>
		</select>

</nav>
<!-- ======================================================================================================================== -->

<table>
	<tr>
		<td>
<!-- formulario de articulos================================================== -->
<hr class="soften"/>
<form method="post" action="" >
  <fieldset>
  
    <legend  style="font-size: 40pt"><b>Reguistro de artículos</b> </legend>


    <div class="form-group">
      <label style="font-size: 14pt">codigo de infraestructura</label>
      <input type="text" name="idinfra" class="form-control"  required placeholder="Id de infraestructura" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>tipo de bien</b></label>
      <input type="text" name="codigo_bien" class="form-control"  required placeholder="Id del tipo de bien"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>correlativo</b></label>
      <input type="" name="correlativo" class="form-control"  required placeholder="Correlativo" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Nombre del artículo</b></label>
      <input type="text" name="nombre" class="form-control" required placeholder="Articulo" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Marca</b></label>
      <input type="text" name="marca" class="form-control" required placeholder="Marca" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Modelo</b></label>
      <input type="text" name="modelo" class="form-control" required placeholder="Modelo" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Codigo de encargado</b></label>
      <input type="text" name="encargado" class="form-control" required placeholder="Encargado" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Precio</b></label>
      <input type="number" step="any" 
      name="precio" class="form-control" required placeholder="Precio" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>ID Proveedor</b></label>
      <input type="text" step="any" 
      name="proveedor" class="form-control" required placeholder="ID" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Fecha de compra</b></label>
      <input type="date" name="fecha" class="form-control" required placeholder="dd/mm/aa" />
    </div><div class="form-group">
      <label style="font-size: 14pt"><b>Estado</b></label>
     Bueno<input name="estado" type="radio" id="bueno" value="bueno"> Malo<input name="estado" type="radio" id="malo" value="malo"> Descartado<input name="estado" type="radio" id="descarte" value="Descarte">
    </div>
      
   
    <input  class="btn btn-success" type="submit" name="submit" value="Insertar"/>



  </fieldset>
</form>

<?php
		if(isset($_POST['submit'])){
			require("registro2.php");
		}
	?>

		</td>

<!-- generar busqueda de personas ================================================== -->		
		
		

		</td>
	</tr>
</table>

<!-- registrar articulo ================================================== -->
<hr class="soften"/><hr class="soften"/>

<h2> ArtÍculos ingresados</h2>	
<a target="_blank" href="fpdf/tutorial/articulos.php" class="btn btn-danger">Exportar a PDF</a> 

		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Artículos</h4> 
		<div style="height: 500px;width: 925px; overflow-y: auto;">
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM articulos");
				$query=mysql_query($sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>id</td>";
						echo "<td>Infras</td>";
						echo "<td>Bienes</td>";
						echo "<td>Correlativo</td>";
						echo "<td>nombre</td>";
						echo "<td>Marcas</td>";
						echo "<td>Modelos</td>";
						echo "<td>Encargados</td>";
						echo "<td>precio</td>";
						echo "<td>proveedor</td>";
						echo "<td>Fechas</td>";
						echo "<td>estado</td>";
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
				    	echo "<td>$arreglo[6]</td>";
				    	echo "<td>$arreglo[7]</td>";
				    	echo "<td>$arreglo[8]</td>";
				    	echo "<td>$arreglo[9]</td>";
				    	echo "<td>$arreglo[10]</td>";
				    	echo "<td>$arreglo[11]</td>";
				    	
				    	

				    	echo "<td><a href='actualizar3.php?idarticulo=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='index2.php?idarticulo=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM articulos WHERE idarticulo=$idarticulo";
						$resborrar=mysql_query($sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='index2.php'</script>";
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
<p>   <br/><br/></p>
 </footer>
</div><!-- /container -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>