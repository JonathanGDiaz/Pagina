<?php
    $usuariodb = "root";
    $passdb = "joniqua123";
    $host = "localhost";
    $base = "virtualAnime";

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $conexion = mysqli_connect($host, $usuariodb, $passdb) or die("Couldn't connect to server");
    $db = mysqli_select_db($conexion, $base) or die("Couldn't select database");
    
    $consulta = "SELECT email, pass FROM usuarios WHERE email = '$email' AND pass = '$pass'";
    $resultado = mysqli_query($conexion, $consulta) or die("Couldn't execute query'");

    $row = mysqli_fetch_array($resultado);

    if($row){
        if($row['email'] == $email && $row['pass'] == $pass){
            header('Location: inicio.html');
        }
    }else{
        header('Location: index.html');
    }
?>