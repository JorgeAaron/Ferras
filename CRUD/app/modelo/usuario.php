<?php 

include 'config/conexionBD.php';

class Usuario{

	protected $username;
	protected $nombre;
	protected $password;
	protected $rol;
	protected $id;

	public function __construct($nom, $desc, $prec, $cod, $id = ''){
		$db = new Conexion();

		$this->username= $nom;
		$this->nombre = $desc;
		$this->password = $prec;
		$this->rol = $cod;
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

		$sql = "INSERT INTO `usuarios`(`username`, `nombre`, `password`, `rol`) VALUES ('$this->username', '$this->nombre', '$this->password', '$this->rol')";

		$db->query($sql) ? header("location: usuarios.php?res=insertado") : header("location: usuarios.php?res=error");

	}

    public function delete(){
		$db = new  Conexion();

		$sql = "DELETE FROM `usuarios` WHERE `idusuario`= $this->id";


		
		$db->query($sql) ? header("location: usuarios.php?res=eliminado") : header("location: usuarios.php?res=error");


    }
    

	public function update(){

		$db = new Conexion();

		$sql = "UPDATE `usuarios` SET `username`='$this->username',`nombre`='$this->nombre',`password`=$this->password,`rol`='$this->rol' WHERE `idusuario` = $this->id";
		
		$db->query($sql) ? header("location: usuarios.php?res=editado") : header("location: usuarios.php?res=error");

		
	}



	public function selectId(){
		$db = new Conexion();

		$sql = "SELECT * FROM `usuarios` WHERE `idusuario` = $this->id";

		$result = $db->query($sql);

		return $result;
	}

	public function select(){

		$db = new Conexion();

		$sql = "SELECT * FROM `usuarios`";

		$result = $db->query($sql);

		return $result;

	}



}

 ?>