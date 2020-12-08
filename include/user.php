  
<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $username;
    private $rol;



    public function userExists($user, $pass){
        $md5pass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
            $this->rol = $currentUser['rol'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getRol() {
        return $this->rol;
    }
	
}

?>