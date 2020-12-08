<?php 
include 'app/modelo/pinturas.php';

if (isset($_POST['submit'])) {
	
	if ($_POST['accion'] == 'insert') {
		
		$nom = $_POST['nombre'];
		$desc = $_POST['descripcion'];
		$prec = $_POST['precio'];
		$cod = $_POST['codigo'];

		$Herramientas = new Pinturas($nom, $desc, $prec, $cod);
		$Herramientas->insert();
	}

	if ($_POST['accion'] == 'update') {
				
			$nom = $_POST['nombre'];
			$desc = $_POST['descripcion'];
			$prec = $_POST['precio'];
			$cod = $_POST['codigo'];
			$id = $_POST['id'];

			$Herramientas = new Pinturas($nom, $desc, $prec, $cod, $id);
			$Herramientas->update();

		}
	
}

 ?>