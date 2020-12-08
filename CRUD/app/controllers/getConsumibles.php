<?php 

if ( (isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'editar')) {

	$id = $_GET['id'];
	$consumibles = Consumibles::soloId($id);
	$array = $consumibles->selectId();
	$datos = $array->fetch_array();
	$accion = 'update';

}

if ((isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] =='eliminar')) {
	
	$id = $_GET['id'];
	$consumibles = Consumibles::soloId($id);
	$array = $consumibles->delete();
	

	
	
}




?>