<?php
class Morango extends Fruta {
    // extends = heranca da classe desejada
    public $peso;
    // uma classe filha pode ter propiedades proprias
    // herda todas as propriedades e metodos da classe pai
    function __construct($nome, $cor, $peso)
    // sobrescrever metodos da classe pai eh posssivel
    // com seus proprios argumentos
    {
     $this->nome = $nome;
     $this->cor = $cor;
     $this->peso = $peso;
    }

    function intro()
    {
    echo "Eu sou uma $this->nome";
    }
    public function mensagem(){
        echo "Sei la";
    }
}
 ?>