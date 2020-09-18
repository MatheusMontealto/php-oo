<?php

class Pedido {

    public $numero;
    public $cliente;

}

class Cliente {

    public $nome;
    public $endereco;

}

$cliente = new Cliente();
$cliente->nome = "Matheus Montealto";
$cliente->endereco = " Rua xxx, Número: 123";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(

    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,                              // Relação entre os objetos (Associação).
    'endereco_cliente' => $pedido->cliente->endereco

);

var_dump($dados);