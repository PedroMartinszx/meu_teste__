<?php 
require_once 'pessoas.php';
require_once 'conexao.php'
$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_banco = "meuPDO";

$id_pessoa = $_GET['id_pessoa'];
try {
    $pessoa = new Pessoa($id_pessoa);
    $pessoa->deletar();

    setcookie("deletado", true);
    header("location: sql_pdo.php");

} catch (PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}






?>