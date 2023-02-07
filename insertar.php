<?php
    include 'conexion.php';
    if(isset($_POST['registrar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];
        $bd ->exec("SET CHARACTER SET utf8");
        $mbd = $bd->prepare("INSERT INTO usuario(nombre,apellido,correo,pass) VALUES(?,?,?,?)");

        $resultado = $mbd->execute([$nombre,$apellido,$correo,$pass]);
    if($resultado === TRUE){    
        header('Location: login.php');
    }else{
        echo "Error al insertar el registro";
    }


    }