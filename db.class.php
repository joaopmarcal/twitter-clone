<?php

class db {
    //host
    private $host = 'sql141.main-hosting.eu';
    //usuario
    private $usuario = 'u295230694_twitt';
    //senha
    private $senha = 'gforce10';
    //banco de dados
    private $database = 'u295230694_twitt';

    public function conecta_mysql(){

        //cria a conexão
        $con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);

        //ajustar o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($con, 'utf8');

        //verificar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o Banco de dados mysql'.mysqli_connect_error();
        }
        return $con;
    }
}

?>