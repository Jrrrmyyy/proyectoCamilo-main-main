

<?php

    $mensaje = "";

    if ( isset($_POST['enviar']) ) {

        include_once 'conexion.php';

        $BD = new ConectarBD();   
        $conn = $BD->getConexion();
   
        $stmt = $conn->prepare('INSERT INTO usuarios (usuario, password, email, nombre, apellidos) '
              . 'VALUES (:usuario, :password, :email, :nombre, :apellidos)');
    
        try {
            $stmt->execute( array( ':usuario' => $_POST['usuario'],
                               ':password' => $_POST['clave'],
                               ':email' => $_POST['correo'],
                               ':nombre' => $_POST['nombre'],
                               'apellidos' => $_POST['apellidos'],
                                )
                      );
        }
        catch (PDOException $ex) {
            print "¡Error!: " . $ex->getMessage() . "<br/>";
            die();
        }

        $BD->cerrarConexion(); 

        $mensaje = "Usuario " . $_POST['usuario'] . " dado de alta correctamente";

    }else if(isset($_POST['enviar'])){
        
    };

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>  

    <form action="" method="post">
        Usuario: <input type="text" name="usuario" required /><br/>
        Contraseña: <input type="password" name="clave" required /><br/>
        Correo Electrónico: <input type="email" name="correo" required /><br/>
        Nombre: <input type="text" name="nombre" required /><br/>
        Apellidos: <input type="text" name="apellidos" required /><br/>
        <input type="submit" value="Enviar" name="enviar" />
    </form>
    <br/>
    <a href="login.php">Login</a><br/> 
    <a href="indexPerfil.php">Ir a Aplicación</a><br/>
       
    <p><?php echo $mensaje; ?></p>
</body>
</html>