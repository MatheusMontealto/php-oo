<?php
// Referência e Clonagem de objetos

class Pessoa {

    public $idade;

    public function __clone() {                           // Método que se ativa quando se utiliza o termo "clone".
        echo "Clonagem de objetos <br></br>";
    }

}

$pessoa = new Pessoa();
$pessoa->idade = 21;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 31;

echo "Pessoa 1 tem ".$pessoa->idade." anos.";
echo "<br></br>";
echo "Pessoa 2 tem ".$pessoa2->idade." anos.";