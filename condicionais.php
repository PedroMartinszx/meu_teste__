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

    $idade = 71;
    $nome  = "Pedro";

    if ($idade >= 18 && $idade < 70){
        echo "VOTO OBRIGATORIO";
    } else if ($idade >= 16 || $idade >= 70) {
        echo "VOTO OPCIONAL";
    } else {
        echo "NAO VOTA";
    }
    echo "<br>";
    if($idade > 18 || $none == "Maria"){
        echo "ENTRA NO CLUBE";
    } else {
        echo "NAO ENTRA";
    }


    $corFav = "vermelho";

    switch ($corFav){
        case "vermelho":
            echo "Cor favorita é vermelho";
            break;
        case "azul":
            echo "Cor favorita é azul";
            break;
        default:
        echo "Opcao Invalida";
    }

    echo "<br>";
    // laços de repeticao ou loops

    $contador = 0;
    while ($contador<10){
        echo "Sou menor que dez, meu valor é $contador <br>";
        $contador++;
    }

    do{
        echo "Sou menor que dez, meu valor é $contador <br>";
        $contador++;
    }while ($contador < 10);

    echo "$contador <br>";

    for ($i = 0; $i < 10; $i++){
        echo "Sou menor que dez, meu valor é $i <br>";
    }

    $cores = array("vermelho","azul", "verde", "amarelo");

    foreach ($cores as $cor){
        echo "$cor <br>";
    }







?>
    
</body>
</html>