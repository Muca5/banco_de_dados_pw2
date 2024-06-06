<?php

require_once '../model/pessoa.php'; //recebendo os requerimentos do "pessoa.php"

class PessoaController{ //criando a classe "PessoaController
    private $pessoa; //criando a variavel pessoa
    
    public function __construct(){ //adcionando a função construct a PessoaController
        $this->pessoa = new Pessoa(); //criando o objeto "Pessoa"
        $this->inserir(); //adcionando a função inserir
    }

    //setando as informaçoes que o usuario digitou na função inserir
    public function inserir(){
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
        $this->pessoa->inserir(); //acessando a função inserir atraves da classe "pessoa"

    }
}
new PessoaController(); //criando um novo objeto "PessoaController" e inicializa
?>