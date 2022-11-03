<?php
require_once 'animal.php';
// indica qual o arquivo que contem a classe que sera utilizada para a heranca
class Gato extends Animal {
    public function fazBarulho()
    // implementar obrigatorioamnt e o metodo vindo da classe pai
    {
        echo "Miau";
    }

    public function locomove()
    // impelmentar obrigatoriamente o metodo vindo da interface
    {
        echo "Andando";
    }
}

?>