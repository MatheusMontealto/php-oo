<?php

/*
public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão
acessíveis por todos que quiserem acessá-los.

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos
protegidos como se fossem públicos.

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível
só e somente só pela classe que a declarou.
*/

class Veiculo {
    protected $modelo;
    private $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }
 
    public function setCor($c) {
        $this->cor = $c;
    }

    public function getCor() {
        return $this->cor;
    }

}


class Carro extends Veiculo {
    
    public function ligarLimpador() {
        echo "Limpando em 321 ";
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getModelo() {
        return $this->modelo;
    }

}

class Moto extends Veiculo {

    public function Empinar() {
        echo "Dando grau em 321 ";
    }

}

$carro = new Carro();
$carro->setModelo("HILUX");
$carro->setCor("Branca");
echo $carro->getModelo();
echo "<br>";
echo $carro->getCor();
echo "<br> </br>";
var_dump($carro);