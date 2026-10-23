<?php
class Produtos{
    public $nome;
    public $valor;
}

$nome_01 = new Produtos();

$produto_01 -> nome = "escova de cabelo";
$produto_01 -> valor = 15;

echo "$produto_01-nome\n";
echo $produto_01->valor;


$produto_02 = new Produtos();

$produto_02 -> nome = "hidratante";
$produto_02 -> valor = 20;

echo "$produto_02->nome\n";
echo $produto_02->valor;



$produto_03 = new Produtos();

$produto_03 -> nome = "gloss";
$produto_03 -> valor = 10;

echo "$produto_03->nome\n";
echo $produto_03->valor;

$soma = $produto01->valor = $produto02->valor = $produto03->valor
?>



