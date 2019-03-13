<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "insert into usuarios(usuario, email, senha) values ('$usuario','$email','$senha')";

    if($mysqli_query($link, $sql)){
        echo 'Usuario registrado com sucesso!';
    } else {
        echo 'erro ao registrar o usuário';
    };

?>