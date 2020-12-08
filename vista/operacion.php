<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
</head>
<body>
    <form action="operacion.php" method="POST">
       Nombre:        <input type="text" name="nombre" id="nombre">
        <br>
        <br>
       Descripcion:  <input type="text" name="descripcion" id="descripcion">
        <br>
        <br>
        Precio:  <input type="number" name="precio" id="precio">
        <br>
        <br>
        codigo:  <input type="number" name="codigo" id="codigo">
        <br>
        <br>
        <input type="submit" value="Añadir pendiente">
    </form>

    <div id="todolist">
        <?php
            $servidor = "localhost";
            $nombreusuario = "root";
            $password = "";
            $db = "ferreteria";
        
            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

            if(isset($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['codigo'])){
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $precio = $_POST['precio'];
                $codigo = $_POST['codigo'];
                
                $sql = "INSERT INTO consumibles(nombre, descripcion, precio, codigo)
                                    VALUES('$nombre','$descripcion','$precio','$codigo')";
                
                if($conexion->query($sql) === true){
                    echo '<div><form action=""><input type="checkbox">'.$nombre.'</form></div>';
                }else{
                    die("Error al insertar datos: " . $conexion->error);
                }
                $conexion->close();
            }

        ?>
    </div>
</body>
</html>