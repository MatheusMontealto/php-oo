<?php

// clone*
// construct*
// invoke
// tostring
// get 
// set

class Pessoa {
    private $dados = array();

    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome) {
        return $this->dados[$nome];
    }

    public function __tostring() {
        return "Tentei imporimir o objeto";
    }

    public function __invoke() {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Matheus";
$pessoa->idade = 50;
$pessoa->sexo = "M";

echo $pessoa->$nome."<br></br>";
echo $pessoa->$idade."<br></br>";
echo $pessoa->$sexo."<br></br>";