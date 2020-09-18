<?php

class Pessoa {

    const nome = "Matheus";                                 // Termo "const" para criar a constante.

    public function exibirNome() {
        echo self::nome;                                    // Termo "self::" seguido pelo nome da constante para referenciar a constante dentro do escopo de uma classe.
    }

}

class Matheus extends Pessoa {

    const nome = "Montealto";

    public function exibirNome() {
        echo parent::nome;                                  // Termo "parent::" seguido pelo nome da constante para referenciar a constante de mesmo nome dentro do escopo de outra classe.
    }

}

$matheus = new Matheus();
$matheus->exibirNome();