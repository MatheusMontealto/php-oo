<?php

class Animal {

    public function Andar() {
        echo "O animal andou.";
    }
    
    public function Correr() {
        echo "O animal correu";
    }
}

class Cavalo extends Animal {

    public function Andar() {                       // O conceito de polimorfismo se aplica quando reescrevemos um método comum entre duas classes.
        $this->Correr();
    }

}

$animal = new Cavalo();
$animal->Andar();