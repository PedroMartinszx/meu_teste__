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

$texto = "Hello World";




echo strlen($texto); // retorna o tamanho da estring
echo "<br>";
echo str_word_count($texto); // retorna a contagem de palavras
echo "<br>";
echo strrev($texto); // inverte astring
echo "<br>";
echo strpos($texto, "World"); // retorna a posicao de uma substring
echo "<br>";
echo str_replace("Hello", "Olá", $texto); // substitui uma string por outra
echo "<hr>";

$numero = 10;
echo is_int($numero); // retorna 1 para inteiros
echo "<br>";
$numero = "Dez";
echo is_string($numero); // retorna 1 para a string
$numero = 2.8;
echo is_nan($numero);

$numero = 2.8;
echo $numero
echo "<br>";
echo (int)$numero; // casting para valor INTEIRO
echo "<hr>";

echo pi(); // retorna o valor de pi
echo "<br>"
echo min(0, 25, 2); // retorna o menor valor e tem o oposto max()
echo "<br>";
echo abs(-12321); // retorna o valor absoluto
echo "<br>";
echo sqrt(64); // retorna o valor da raiz quadrada
echo "<br>"
echo round(0.8); // arrendonda um valor
echo "<br>"
echo rand(); // gera numero aleatório
echo "<hr>";
define("PI", 3.14);
echo PI;
echo "<hr>";
// aritmeticos
// +adicao, - subtracao, *multiplicacao, / divisao, %modilo ou resto, ** exponenciacao
// comparativos
// == igual, === identico(valor e tipo), != diferente >
// para ser obrigatorio a votar vc tem que ter mais de 18 anos e menos de 70
// pessoa com 50 anos...testes: 50 > 18  e 50 < 70 T, logo obrigatorio a votar T
// pessoa com 90 anos...testes: 90 > 18  e 90 < 70 T, logo obrigatorio a votar F
// pessoa com 15 anos...testes: 15 > 18  e 15 < 70 F, logo obrigatorio a votar F 
// or // ou
// para entrar em um determinado clube vc tem que ou ter mais de 18 anos ou se chamar "Maria"
// João de 19 anos...testes: 19 > 18 T ou "Maria" == "João" F logo joao pode entrar por ter passado no teste da idade
?>
</body>
</html>