<?php

abstract class Banco {                       // Classe abstrata que serve como modelo para outras classes, não podendo mais ser instanciada.
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function Sacar($s);                  // Métodos abstratos que são obrigatórios para se instanciar a classe.                                              
    abstract protected function Depositar($d);

}

class Itau extends Banco {

    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }

    public function Depositar($d) {
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }

}

class Bradesco extends Banco {
    
    public function Sacar($s) {
        echo "Sacou";
    }

    public function Depositar($d) {
        echo "Depositou";
    }
    
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: ".$itau->getSaldo();
