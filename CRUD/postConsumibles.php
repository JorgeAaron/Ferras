<?php 
include 'app/modelo/consumibles.php';

if (isset($_POST['submit'])) {
	
	if ($_POST['accion'] == 'insert') {
		
		$nom = $_POST['nombre'];
		$desc = $_POST['descripcion'];
		$prec = $_POST['precio'];
		$cod = $_POST['codigo'];

		$consumibles = new Consumibles($nom, $desc, $prec, $cod);
		$consumibles->insert();
	}

	if ($_POST['accion'] == 'update') {
				
			$nom = $_POST['nombre'];
			$desc = $_POST['descripcion'];
			$prec = $_POST['precio'];
			$cod = $_POST['codigo'];
			$id = $_POST['id'];

			$consumibles = new Consumibles($nom, $desc, $prec, $cod, $id);
			$consumibles->update();

		}
	
}

 ?>