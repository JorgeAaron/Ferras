<?php 
include 'app/modelo/tornilleria.php';

if (isset($_POST['submit'])) {
	
	if ($_POST['accion'] == 'insert') {
		
		$nom = $_POST['nombre'];
		$desc = $_POST['descripcion'];
		$prec = $_POST['precio'];
		$cod = $_POST['codigo'];

		$Tornilleria = new Tornilleria($nom, $desc, $prec, $cod);
		$Tornilleria->insert();
	}

	if ($_POST['accion'] == 'update') {
				
			$nom = $_POST['nombre'];
			$desc = $_POST['descripcion'];
			$prec = $_POST['precio'];
			$cod = $_POST['codigo'];
			$id = $_POST['id'];

			$Tornilleria = new Tornilleria($nom, $desc, $prec, $cod, $id);
			$Tornilleria->update();

		}
	
}

 ?>