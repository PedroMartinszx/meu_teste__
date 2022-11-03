<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    Ola mundo

    <?php
    echo "Ola mundo";
    $texto = "Isso eh string!";
    $num_int = 10;
    $num_real = 2.3;

    echo "o q eh isso? $texto";
    echo "o que isoo?" .$texto;
    echo $num_int + $num_real;


    $x = 5;
    $y = 11;

    function minhaFuncao(){
        global $x;
        $y = 10;
        echo "a variavel x é $x dentro da funcao<br>";
        echo $y;
        $y++;
    }
    minhaFuncao();
    echo "a variavel x é $x fora da funcao<br>";



    ?>
</body>
</html>