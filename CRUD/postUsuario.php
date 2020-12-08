<?php 
include 'app/modelo/usuario.php';

if (isset($_POST['submit'])) {
	
	if ($_POST['accion'] == 'insert') {
		
		$nom = $_POST['username'];
		$desc = $_POST['nombre'];
		$prec = $_POST['password'];
		$cod = $_POST['rol'];

		$Usuario = new Usuario($nom, $desc, $prec, $cod);
		$Usuario->insert();
	}

	if ($_POST['accion'] == 'update') {
				
			$nom = $_POST['usernmae'];
			$desc = $_POST['nombre'];
			$prec = $_POST['password'];
			$cod = $_POST['rol'];
			$id = $_POST['id'];

			$Usuario = new Usuario($nom, $desc, $prec, $cod, $id);
			$Usuario->update();

		}
	
}

 ?>