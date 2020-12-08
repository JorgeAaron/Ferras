<?php 

include 'config/conexionBD.php';

class Herramientas{

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

		$sql = "INSERT INTO `herramientas`(`nombre`, `descripcion`, `precio`, `codigo`) VALUES ('$this->nombre', '$this->descripcion', '$this->precio', '$this->codigo')";

		$db->query($sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");

	}

	public function delete(){
		$db = new  Conexion();

		$sql = "DELETE FROM `herramientas` WHERE `id`= $this->id";


		
		$db->query($sql) ? header("location: index.php?res=eliminado") : header("location: index.php?res=error");


	}

	public function update(){

		$db = new Conexion();

		$sql = "UPDATE `herramientas` SET `nombre`='$this->nombre',`descripcion`='$this->descripcion',`precio`=$this->precio,`codigo`='$this->codigo' WHERE `id` = $this->id";
		
		$db->query($sql) ? header("location: index.php?res=editado") : header("location: index.php?res=error");

		
	}



	public function selectId(){
		$db = new Conexion();

		$sql = "SELECT * FROM `herramientas` WHERE `id` = $this->id";

		$result = $db->query($sql);

		return $result;
	}

	public function select(){

		$db = new Conexion();

		$sql = "SELECT * FROM `herramientas`";

		$result = $db->query($sql);

		return $result;

	}




}

 ?>