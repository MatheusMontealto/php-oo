<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
        echo $this->nome." de " .$this->idade." anos acabou de falar";
    }
}

$matheus = new Pessoa();
$matheus->nome = "Matheus dos Santos Montealto";
$matheus->idade = 21;
$matheus->Falar();