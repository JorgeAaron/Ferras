<?php 

if ( (isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'editar')) {

	$id = $_GET['id'];
	$herramientas = Herramientas::soloId($id);
	$array = $herramientas->selectId();
	$datos = $array->fetch_array();
	$accion = 'update';

}

if ((isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] =='eliminar')) {
	
	$id = $_GET['id'];
	$herramienta = Herramientas::soloId($id);
	$array = $herramienta->delete();
	

	
	
}




?>