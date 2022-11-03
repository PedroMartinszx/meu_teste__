<?php

$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_banco = "meuPDO";

$id_pessoa = $_POST['id_pessoa'];
$nome = $_POST['nome'];
$idade = $POST['idade'];

try{
    $pessoa = new Pessoa($id_pessoa);
    $pessoa->nome = $nome;
    $pessoa->idade = $idade;

    $pessoa->atualizar();
  


    setcookie("atualizado", true);
    header("location: index.php");
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}