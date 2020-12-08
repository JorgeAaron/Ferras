<?php 

if ( (isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'editar')) {

	$id = $_GET['id'];
	$Pinturas = Pinturas::soloId($id);
	$array = $Pinturas->selectId();
	$datos = $array->fetch_array();
	$accion = 'update';

}

if ((isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] =='eliminar')) {
	
	$id = $_GET['id'];
	$Pinturas = Pinturas::soloId($id);
	$array = $Pinturas->delete();
	

	
	
}




?>