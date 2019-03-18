<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    // Verifica se o usuário já existe
    $sql = " select * from usuarios where usuario = '$usuario'";
    if($resultado_id = mysqli_query($link, $sql)){
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if(isset($dados_usuario['usuario'])){
            echo 'Usuário já cadastrado';
        } else {
            echo 'Usuario não cadastrado';
        }
    }else {
        echo 'Erro ao tentar localizar o registro de usuário';
    }
    //Verifica se o e-mail já existe
    $sql = " select * from usuarios where email = '$email'";
    if($resultado_id = mysqli_query($link, $sql)){
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if(isset($dados_usuario['email'])){
            echo 'E-mail já cadastrado';
        } else {
            echo 'E-mail não cadastrado';
        }
    }else {
        echo 'Erro ao tentar localizar o registro de e-mail';
    }
    $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
    //executar a query

    if(mysqli_query($link, $sql)){
        echo "Usuario registrado com sucesso!";
    } else {
        echo "erro ao registrar o usuário";
    }

?>