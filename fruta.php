<?php
class fruta {
    public $nome; // private e protected public - acessivel e qualquer lugar protecded - pode ser scessado apenas dentro da classe e por classes derivadas (filhas) private - so pode se acessado dentro da classe
    public $cor;

    function__construct($nome, $cor)
    /// construtor eh chamado quando se faz uma nova instancia da classe 
    {
        $this->nome = $nome;
        // a palavra this refere-se a propriedade da propria classe
        $this->cor = $cor;
    }

    final function qualquer (){
        // a palavra-chave final, evita q esse metodo seja reescrito nas classe filhas se utilizada na classes filhas se utilizada na classe, evita que a classe seja herdada
        echo 'qualquer';
    }

    function intro(){
        echo "eu sou uma $this->nome";
    }
    function set_nome($nome){
        // funcoes/metodos setters sao usados para atribuir valores 
        $this->nome = $nome;
    }

    public function intro(){
        echo "Eu sou uma $this->nome";
    }

    function set_cor($cor){
        return  $this-> = $cor;
    }

    function get_cor(){
        return $this->$cor;
    }

    const AGRADECER = 

}






?>