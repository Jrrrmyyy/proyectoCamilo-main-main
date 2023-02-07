
<?php

    $resultado = null;

    if(isset($_POST['enviar'])){
        //tenemos que obtener el nombre nativo del archivo que va a subir 
        $name = $_FILES['foto']['name'];
        //obtener el archivo temporal
        $tmp_name = $_FILES['foto']['tmp_name'];
        $error = $_FILES['foto']['error'];
        $size = $_FILES['foto']['size'];
        $max_size = 720 * 487;
        $type = $_FILES['foto']['type'];
        $tamaño = 5;
        $nombre = $_REQUEST['txtnom'];
            if($error){
                $resultado = "Ha ocurrido un error";
                    echo $resultado;
            }else if($size > $max_size){
                $resultado = "El archivo supera el maximo permitido (1MB)";
                echo $resultado;
            }else if($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/gif' && $type != 'image/jfif'){
                $resultado = "Imágenes validas: jpg|png|jpeg|gif|jfif";
                echo $resultado;
            }else{
                $ruta = "fotos/" . $name;
                move_uploaded_file($tmp_name, $ruta);
                require 'conexion.php';
                $sql = $conexion -> prepare("INSERT INTO graficos(nombre, archivo) VALUES (?,?)");
                $resultado = $sql->execute([$nombre,$ruta]);
                header("Location: index.php");
            }
    }

    

?>
