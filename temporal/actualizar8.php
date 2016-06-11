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
    <title>Proyecto Activo fijo</title>
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
			<li class=""><a href="index2.php">ADMINISTRADOR PERSONAS</a></li>
			 
	
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
		<h2> Administración de proveedores</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Editar proveedores </h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM estado WHERE idestado=$idestado";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$idestado=$row[0];
		    	$articulo=$row[1];
		    	$asunto=$row[2];
		    	$fecha_in=$row[3];
		    	$horas=$row[4];
		    	$costo=$row[5];
		    	$fecha_sal=$row[6];
		    	$problema=$row[7];
		    	$tecnico=$row[8];
		    }



		?>

		<form action="ejecutaactualizar8.php" method="post">
				Id<br><input type="text" name="idestado" value= "<?php echo $idestado ?>" readonly="readonly"><br>
				Artículo<br> <input type="text" name="articulo" required value="<?php echo $articulo?>"><br>
				Asunto<br> <input type="text" name="asunto" required value="<?php echo $asunto?>"><br>
				Fecha de ingreso<br> <input type="date" name="fehca_in" required value="<?php echo $fecha_in?>"><br>
				Horas <br> <input type="text" name="horas" required value="<?php echo $horas?>"><br>
				costo<br> <input type="number" name="costo" required value="<?php echo $costo?>"><br>
				Fehca de salida<br> <input type="date" name="fehca_sal" required value="<?php echo $fecha_sal?>"><br>
				Problema<br> <input type="text" name="problema" required value="<?php echo $problema?>"><br>
				Técnico<br> <input type="text" name="tecnico" required value="<?php echo $tecnico?>"><br>
				

				
				
				<br>
				<input type="submit" required value="Actulizar" class="btn btn-success btn-primary">
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


