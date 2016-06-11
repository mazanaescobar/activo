<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index2.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto activo fijo</title>
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


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="index2.php">ADMINISTRADOR DE ARTICULO</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de articulos</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición editar articulos</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM articulos WHERE idarticulo=$idarticulo";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$idarticulo=$row[0];
		    	$infraestructura=$row[1];
		    	$codigo_bien=$row[2];
		    	$correlativo=$row[3];
		    	$nombre=$row[4];
		    	$marca=$row[5];
		    	$modelo=$row[6];
		    	$encargado=$row[7];
		    	$precio=$row[8];
		    	$proveedor=$row[9];
		    	$fecha_compra=$row[10];
		    	$estado=$row[11];
		    	
		    }



		?>

		<form action="ejecutaactualizar3.php" method="post">
				Id<br><input type="text" name="idarticulo"   value= "<?php echo $idarticulo ?>" readonly="readonly"><br>
				Infra<br> <input type="text" name="infraestructura"  required value="<?php echo $infraestructura?>"><br>
				Bienes<br> <input type="text" name="codigo_bien" required value="<?php echo $codigo_bien?>"><br>
				Correlativo<br> <input type="text" name="correlativo" required value="<?php echo $correlativo?>"><br>
				Nombre<br> <input type="text" name="nombre"  required value="<?php echo $nombre?>"><br>
				Marca<br> <input type="text" name="marca"  required value="<?php echo $marca?>"><br>
				Modelo<br> <input type="text" name="modelo"  required value="<?php echo $modelo?>"><br>
				Encargado<br> <input type="text" name="encargado" required value="<?php echo $encargado?>"><br>
				Precio<br> <input type="number" name="precio" value="<?php echo $precio?>"><br>
				Proveedor<br> <input type="text" name="proveedor" value="<?php echo $proveedor?>"><br>
				Fecha de compra<br> <input type="date" required name="fecha_compra" value="<?php echo $fecha_compra?>"><br>
				Estado<br> Bueno<input name="estado" type="radio" id="bueno" value="bueno"> Malo<input name="estado" type="radio" id="malo" value="malo"> Descartado<input name="estado" type="radio" id="descarte" value="Descarte"> <br>

				
				
				<br>
				<input type="submit"  required value="Actulizar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>  <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


