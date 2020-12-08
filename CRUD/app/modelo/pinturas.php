<?php 

include 'config/conexionBD.php';

class Pinturas{

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

		$sql = "INSERT INTO `pinturas`(`nombre`, `descripcion`, `precio`, `codigo`) VALUES ('$this->nombre', '$this->descripcion', '$this->precio', '$this->codigo')";

		$db->query($sql) ? header("location: inventario_pinturas.php?res=insertado") : header("location: index2.php?res=error");

	}

	public function delete(){
		$db = new  Conexion();

		$sql = "DELETE FROM `pinturas` WHERE `id`= $this->id";


		
		$db->query($sql) ? header("location: inventario_pinturas.php?res=eliminado") : header("location: inventario_pinturas.php?res=error");


	}

	public function update(){

		$db = new Conexion();

		$sql = "UPDATE `pinturas` SET `nombre`='$this->nombre',`descripcion`='$this->descripcion',`precio`=$this->precio,`codigo`='$this->codigo' WHERE `id` = $this->id";
		
		$db->query($sql) ? header("location: inventario_pinturas.php?res=editado") : header("location: inventario_pinturas.php?res=error");

		
	}



	public function selectId(){
		$db = new Conexion();

		$sql = "SELECT * FROM `pinturas` WHERE `id` = $this->id";

		$result = $db->query($sql);

		return $result;
	}

	public function select(){

		$db = new Conexion();

		$sql = "SELECT * FROM `pinturas`";

		$result = $db->query($sql);

		return $result;

	}




}

 ?>