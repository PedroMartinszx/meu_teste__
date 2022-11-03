<?php

class Conexao {
    public static function conectar(){
        $conn = new PDO()

    }
}



$conn = new PDO(DB_DRIVE . "host= " . NOME_SERVIDOR . "; dbname=" . NOME_SERVIDOR", USUARIO, SENHA);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;




?>