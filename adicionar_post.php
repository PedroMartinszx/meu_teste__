<?php
require_once 'pessoas.php';
require_once 'conexao.php';

try{
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $pessoa = new Pessoa();


    $pessoa->nome = $nome;
    $pessoa->idade = $idade;

    $pessoa->inserir();

    header("Location: index.php");
} catch (Exception $e) {
    echo $e->getMessage();
}


















?>