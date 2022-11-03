

<?php 
require_once 'conexao.php';
require_once 'pessoas.php'
// criando banco de dados
try{
    $conn = new PDO("mysql:host=$nome_servidor", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS meuPDO";
    $conn->exec($sql);
    echo "Banco de dados criado com sucesso <br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
//-------------------------------------------------------------------------------------
//criando tabelas

try{
    $conn = new PDO("mysql:host=$nome_servidor; dbname=$nome_banco", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE IF NOT EXISTS pessoas (
        id pessoa INT(6) AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255), idade INT(3), data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";


$conn->exec($sql);
echo "Tabela pessoas criada com sucesso";
} catch (PDOException $e){
    echo $sql. "<br>" .$e->getMessage();
}
$conn = null;
// -----------------------------------------------
// listando via classe
if(isset($_GET['busca'])){
    $oalavra = $_GET['busca'];
}

try{
$pessoa = new Pessoa();
$lista = $pessoa->listar();
} catch (Exeption $e){
    echo $e->getMesage();
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div>
    <div id="exibe"></div>
    <div class="felx-container">
    <button a href="criar_pessoas.php"><span class="material-symbols-outlined">Add</button>
</div>
    <div class="flex-container">
        <form action="index.php" class="felx-container">
            <input type="search" name="busca" id="busca">
            <input type="submit" value="Buscar">


    </div>
    <?php if(!count($lista)>0): ?>
    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>idade</th>
            <th>registro</th>
        </tr>
        <?php foreach($lista as $item): ?>
            <!-- forecach para percorrer cada elemento da lista gerada para criar a tr abaixo para cada um deles-->
            <tr>
                <td><?= $item['id_pessoa'] ?></td>
                <!-- preenchendo o valor de cada TD da tabela com o valor referente ao item atual indicando sua chave-->
                <td><?= $item['nome'] ?></td>
                <td><?= $item['idade'] ?></td>
                <td><?= $item['registro'] ?></td>
            </tr>
        <?php endforeach ?>
       <tr>
        <td>8</td>
        <td>joao</td>
        <td>23</td>
        <td>asosmsdnjsdh</td>
       </tr>
    </table>
    <?php else: ?>
        <p>
            nao tem pessoas cadastradadas
        </p>
        <?php endif ?>

        <script src="js/script.js"></script>
</body>
</html>