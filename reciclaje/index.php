<?php 
include 'app/modelo/herramientas.php';
$datos = array('nombre'=>'', 'descripcion'=>'', 'precio'=>'', 'codigo'=>'', 'id'=>'');
$accion = 'insert';

include 'app/controllers/getHerramienta.php';

echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";

 ?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/./css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="/./css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="/./js/bootstrap.min.js" crossorigin="anonymous"></script>
<head>
	<meta charset="utf-8">
	<title>Mi Agenda</title>
</head>
<body>



<form action="postHerramienta.php" method="post">

	<div class="icon-user-plus"></div>

	<input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre" required="requiered">

	<input type="text" name="descripcion" value="<?php echo $datos['descripcion']; ?>" placeholder="descripcion" required="requiered">

	<input type="number" name="precio"  value="<?php echo $datos['precio']; ?>"placeholder="precio" required="requiered">
	
	<input type="number" name="codigo"  value="<?php echo $datos['codigo']; ?>"placeholder="codigo" required="requiered">



	<input type="hidden" name="id" value="<?php  echo $datos['id']?>">
	<input type="hidden" name="accion" value="<?php  echo $accion?>">

	<input type="submit" name="submit" value="Enviar">
</form>

<table>
 <th>Nombre</th>
 <th>Descripcion</th>
 <th>Precio</th>
 <th>Codigos</th>
 <th>Editar</th>
 <th>Eliminar</th>

<?php 

$Herramientas = Herramientas::ningunDato();



$datos = $Herramientas->select();

while ($row = $datos->fetch_array()) {
	
	echo '<tr>';
	echo '<td>',$row['nombre'] ,'</td>';
	echo '<td>',$row['descripcion'] ,'</td>';
	echo '<td>',$row['precio'] ,'</td>';
	echo '<td>',$row['codigo'] ,'</td>';
	echo "<td> <a href=\"index.php?accion=editar&&id=$row[id]\">Editar</a> </td>";
	echo "<td> <a href=\"index.php?accion=eliminar&&id=$row[id]\">Eliminar</a> </td>";
	

	echo '</tr>';
}


 ?>

</table>





</body>
</html> 