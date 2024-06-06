<?php

//criando a classe Conexao
class Conexao {
    private $host = "localhost"; //criando a variavel "localhost" privada
    private $usuario = "root";//criando a variavel "root" privada
    private $senha = ""; // criando a variavel "senha" privada
    private $banco = "cliente"; // criando a variavel "cliente" privada
    private $conexao; //criando a variavel conexao privada

    //criando o metodo contruct atraves da função
    public function __construct() {
        
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);//passagem de parametros para o banco de dados
        if ($this->conexao->connect_error) {
            die("Falha na conexão: " . $this->conexao->connect_error); //caso a conexao der erro aparecera uma mensagem
        }
    }
    //criando o metodo getConexao atraves da função
    public function getConexao() {
        return $this->conexao; //retorno de valores para o banco
    }
}

?>