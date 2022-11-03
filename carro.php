<?php
class Carro {
public $cor;
public $modelo;

public function __construct($cor, $modelo)
{
    $this -> cor $cor;
    $this -> modelo = $modelo;
}

public function mensagem() {
return new "Meu carro é um" .$this->modelo . " "
. $this->cor;
}

}
$meu carro =new Carro("preto", "bmw");
echo $meuCarro -> mensagem();
echo $meucarro -> cor;