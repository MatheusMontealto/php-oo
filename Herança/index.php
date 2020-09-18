<?php

/* Herança(extends) é um recurso que permite que classes compartilhem atributos e métodos,
afim de reaproveitar códigos ou comportamentos generalizados */

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }
}


class Carro extends Veiculo {
    
    public function ligarLimpador() {

        echo "Limpando em 321 ";

    }

}

class Moto extends Veiculo {

    public function Empinar() {

        echo "Dando grau em 321 ";

    }
    
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Cinza";
$carro->ano = 1991;
$carro->Andar();
echo "<br> </br>";
$carro->ligarLimpador();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Vermelha";
$moto->ano = 2017;
$moto->Parar();
echo "<br> </br>";
$moto->Empinar();
var_dump($moto);