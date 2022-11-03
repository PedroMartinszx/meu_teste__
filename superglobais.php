<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
       nome: <input type="text" name="nome" id="nome">
       <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = htmlspecialchars($_REQUEST['nome']);
        if (empty($nome)) {
            echo "Nome esta vazio";
        } else {
            echo $nome;
        }
    }
</body>
</html>