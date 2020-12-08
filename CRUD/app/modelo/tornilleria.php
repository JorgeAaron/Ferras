<?php 

include 'config/conexionBD.php';

class Tornilleria{

	protected $nombre;
	protected $descripcion;
	protected $precio;
	protected $codigo;
	protected $id;

	public function __construct($nom, $desc, $prec, $cod, $id = ''){
		$db = new Conexion();

		$this->nombre= $nom;
		$this->descripcion = $desc;
		$this->precio = $prec;
		$this->codigo = $cod;
		$this->id = $id;
	}

	static function ningunDato(){
		return new self('', '', '', '', '');
	} 

	static function soloId($id){
		return new self('','','','', $id);
	}

	public function insert(){

		$db = new Conexion();

		$sql = "INSERT INTO `tornilleria`(`nombre`, `descripcion`, `precio`, `codigo`) VALUES ('$this->nombre', '$this->descripcion', '$this->precio', '$this->codigo')";

		$db->query($sql) ? header("location: inventario_tornilleria.php?res=insertado") : header("location: inventario_tornilleria.php?res=error");

	}

	public function delete(){
		$db = new  Conexion();

		$sql = "DELETE FROM `tornilleria` WHERE `id`= $this->id";


		
		$db->query($sql) ? header("location: inventario_tornilleria.php?res=eliminado") : header("location: inventario_tornilleria.php?res=error");


	}

	public function update(){

		$db = new Conexion();

		$sql = "UPDATE `tornilleria` SET `nombre`='$this->nombre',`descripcion`='$this->descripcion',`precio`=$this->precio,`codigo`='$this->codigo' WHERE `id` = $this->id";
		
		$db->query($sql) ? header("location: inventario_tornilleria.php?res=editado") : header("location: inventario_tornilleria.php?res=error");

		
	}



	public function selectId(){
		$db = new Conexion();

		$sql = "SELECT * FROM `tornilleria` WHERE `id` = $this->id";

		$result = $db->query($sql);

		return $result;
	}

	public function select(){

		$db = new Conexion();

		$sql = "SELECT * FROM `tornilleria`";

		$result = $db->query($sql);

		return $result;

	}




}

 ?>