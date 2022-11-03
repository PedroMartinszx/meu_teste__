<?php

class Pessoas{
    public $id_pessoa;
    public $nome;
    public $idade;
    public $data_registro;
}
    public function __construct($id_pessoa=false)
    {
        if($id_pessoa){
            $this->id_pessoa = $id_pessoa;
            $this->carregar()
        }
    }

    public function carregar(){
        $query = "SELECT nome, idade, data_registro FROM pessoas WHERE pessoas id_pessoa = :id_pessoa";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->binValue(':id_pessoa' , $this->id_pessoa);
        $stmt->execute();

        $lista = $stmt->fetch();
        $this->nome = $lista['nome'];
        $this->idade = $lista['idade'];
        $this->data_registro = $lista['data_registro'];
    }

    public function inserir(){
        $query = "INSERT INTO pessoas (nome, idade)
        VALUES (:nome, :idade);
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':idade', $this->idade);
        $stmt->execute();
    }
    public function listar(){
        %palavra = '%' . $palavra . '%'
        $query = "SELECT * FROM pessoas";
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;

    }



   
        


  
    











?>