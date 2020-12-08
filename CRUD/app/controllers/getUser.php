<?php 

if ( (isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'editar')) {

	$id = $_GET['id'];
	$User = Usuario::soloId($id);
	$array = $User->selectId();
	$datos = $array->fetch_array();
	$accion = 'update';

}

if ((isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] =='eliminar')) {
	
	$id = $_GET['id'];
	$User = Usuario::soloId($id);
	$array = $User->delete();
	

	
	
}




?>