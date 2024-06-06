<?php
require_once '../controller/conexao.php'; //obtendo os requisitos do "conexao.php"

class Pessoa{ //criando a classe "pessoa"
    //criação de todas as variaveis utilizadas para as informações ao banco
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    //obtendo todas as informações que o usuario digitou nos campos para mandar ao banco de dados
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    
    public function __construct(){
        $this->conexao = new Conexao();
    }

    //metodo inserir
    public function inserir(){
        $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)"; //enviando os dados ao banco 
        $stmt = $this->conexao->getConexao()->prepare($sql);//preparando o sql para execução
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular); //vincula os valores de propriedades de um objeto a uma declaração SQL preparada para inserção de dados em um banco de dados
        return $stmt->execute();//executa a declaração SQL preparada previamente vinculada aos parâmetros
    }
}

?>