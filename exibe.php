<?php
require_once 'fruta.php';
require_once 'gato.php';
require_once 'guilherme.php'
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
    <?php

    $banana = new Fruta();
    $banana->set_nome('banana' , 'amarela');
    echo $banana->get_nome();
echo "<br>";
    $maca = new Fruta();
    $banana->set_nome('maçã' , 'vermelha');
    echo $maca->get_nome();
echo "<br>";
    echo $maca->get_cor();
    echo $banana->get_nome();
    $morango = new Morango('morango', 'vermelho');
    echo $morango->get_nnome();
    echo $morango->intro();
    echo $morango->mensagem();
    $maca->mensagem();

    $gato = new Gato();
    echo $gato->fazBarulho();
    ?>

    echo guilherme::atrapalha();

    
</body>
</html>

