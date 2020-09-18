<?php

require 'classes/produto.php';
require 'model/produto.php';

$produto = new \classes\Produto();
$produto->mostrarDetalhes();

$produto = new \models\Produto();
$produto->mostrarDetalhes();