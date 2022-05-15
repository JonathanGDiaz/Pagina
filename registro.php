<?php
    $usuariodb = "root";
    $passdb = "joniqua123";
    $host = "localhost";
    $base = "virtualAnime";

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $usuario = $_POST['usuario'];

    $conexion = mysqli_connect($host, $usuariodb, $passdb) or die("Couldn't connect to server");
    $db = mysqli_select_db($conexion, $base) or die("Couldn't select database");

    $insertar = "INSERT INTO usuarios (nombre,email,pass) VALUES ('$usuario', '$email','$pass')";
    $resultado = mysqli_query($conexion, $insertar) or die("Couldn't insert'");
    header('Location: index.html');
?>