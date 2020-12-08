<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <?php 
            $rol =$user->getRol();
            if($rol==2) {?>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="include/logout.php">Cerrar sesión</a></li>
            <li class="menu"><a href="CRUD/usuarios.php">Administrar usuarios</a></li>
            <li class="menu"><a href="CRUD/index.php">datos sesión</a></li>
            <?php } else { ?>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="include/logout.php">Cerrar sesión</a></li>
            <li class="menu"><a href="CRUD/index.php">datos sesión</a></li>
            <?php } ?>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php 
        echo $user->getNombre(); echo $rol?></h1>
    </section>
    
</body>
</html>