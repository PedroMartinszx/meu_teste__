<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo readfile("webdicio.txt");
    echo "<br>";

    $meu_arquivo = fopen("webdicio.txt", "r") or die ("Incapaz de ler o arquivo");
    echo fread($meu_arquivo, filesize("webdicio.txt"));
    fclose($meu_arquivo);

    $meu_arquivo = fopen("webdicio.txt, "w")
    or die ("Incapaz de ler o arquivo");
    fwrite($meu_arquivo, "apagou\n");
    fclose($meu_arquivo);

    $meu_arquivo = fopen("webdicio.txt", "a")
      or die
    
    ?>
</body>
</html>