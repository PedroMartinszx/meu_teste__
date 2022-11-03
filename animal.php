<?php

abstract class Animal {
    // classe abstrata que deve ser herdada
    // indica metodos abstratos qie obrigatoriamente deverao ser implementadadas pelas classe filhas 
    abstract public function fazBarulho();

    public $cor;
    // classes abstratas podem ter propriedades
}



?>