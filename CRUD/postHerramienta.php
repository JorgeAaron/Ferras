<?php 
include 'app/modelo/herramientas.php';

if (isset($_POST['submit'])) {
	
	if ($_POST['accion'] == 'insert') {
		
		$nom = $_POST['nombre'];
		$desc = $_POST['descripcion'];
		$prec = $_POST['precio'];
		$cod = $_POST['codigo'];

		$herramientas = new Herramientas($nom, $desc, $prec, $cod);
		$herramientas->insert();
	}

	if ($_POST['accion'] == 'update') {
				
			$nom = $_POST['nombre'];
			$desc = $_POST['descripcion'];
			$prec = $_POST['precio'];
			$cod = $_POST['codigo'];
			$id = $_POST['id'];

			$herramientas = new Herramientas($nom, $desc, $prec, $cod, $id);
			$herramientas->update();

		}
	
}

 ?>