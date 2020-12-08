<?php 
include 'app/modelo/tornilleria.php';
$datos = array('nombre'=>'', 'descripcion'=>'', 'precio'=>'', 'codigo'=>'', 'id'=>'');
$accion = 'insert';

include 'app/controllers/getTornilleria.php';

echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";

 ?>

<!DOCTYPE html>
<html>
<<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link rel="stylesheet" href="/../css/bootstrap.min.css">
<style>
	body {
		padding-top: 50px;
		padding-bottom: 20px;
	}
</style>
<link rel="stylesheet" href="/../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/../css/main.css">
		
<script src="/../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<head>
	<meta charset="utf-8">
	<title>Mi Agenda</title>
</head>
<body>




<div class="jumbotron">
<h2 align="center">INVENTARIO DE TORNILLERIA</h2>
      <div class="container">

	  <form align="center" action="postTornilleria.php" method="post">

<div class="icon-user-plus"></div>
<input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre" required="requiered">
<input type="text" name="descripcion" value="<?php echo $datos['descripcion']; ?>" placeholder="descripcion" required="requiered">
<input type="number" name="precio"  value="<?php echo $datos['precio']; ?>"placeholder="precio"   step="any" required="requiered">
<input type="number" name="codigo"  value="<?php echo $datos['codigo']; ?>"placeholder="codigo" required="requiered">
<input type="hidden" name="id" value="<?php  echo $datos['id']?>">
<input type="hidden" name="accion" value="<?php  echo $accion?>">
<input type="submit" name="submit" value="Registrar">

</form>




      <table border="1" align="center">
 <th>Nombre</th>
 <th>Descripcion</th>
 <th>Precio</th>
 <th>Codigos</th>
 <th>Editar</th>
 <th>Eliminar</th>

<?php 

$Tornilleria = Tornilleria::ningunDato();

$datos = $Tornilleria->select();

while ($row = $datos->fetch_array()) {
	
	echo '<tr>';
	echo '<td>',$row['nombre'] ,'</td>';
	echo '<td>',$row['descripcion'] ,'</td>';
	echo '<td>',$row['precio'] ,'</td>';
	echo '<td>',$row['codigo'] ,'</td>';
	echo "<td> <a href=\"inventario_tornilleria.php?accion=editar&&id=$row[id]\">Editar</a> </td>";
	echo "<td> <a href=\"inventario_tornilleria.php?accion=eliminar&&id=$row[id]\">Eliminar</a> </td>";
	        


	echo '</tr>';
}






 ?>

</table>
      </div>
	</div>
	
	<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4" align="center">
          <h2>Herramientas</h2>
          <p>Gestión del Stock disponible de Herramientas. Alta, baja y modificación de productos</p>
          <p><a class="btn btn-default" href="index.php" role="button">Ir a &raquo;</a></p>
        </div>
        <div class="col-md-4 " align="center">
          <h2>Pinturas</h2>
          <p >Gestión del Stock disponible de Pinturas y esmaltes. Alta, baja y modificación de productos</p>
          <p ><a class="btn btn-default"  href="inventario_pinturas.php" role="button" >Ir a  &raquo;</a></p>
       </div>
        <div class="col-md-4" align="center">
          <h2>Consumibles</h2>
          <p>Gestión del Stock disponible de Consumibles. Alta, baja y modificación de productos</p>
          <p><a class="btn btn-default" href="inventario_consumibles.php" role="button">Ir a &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; EL FERRAS Ferretería</p>
      </footer>
    </div> <!-- /container -->        <script src="/..//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="/../js/vendor/bootstrap.min.js"></script>

        <script src="/../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>




</body>
</html> 