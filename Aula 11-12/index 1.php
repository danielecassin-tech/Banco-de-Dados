<?php

class Pessoa{
    public $nome;
    public $idade;
}

$pessoa_01 = new Pessoa();

$pessoa_01 ->nome = "Daniele";
$pessoa_01 ->idade = 16;

echo "$pessoa_01 ->nome\n";
echo $pessoa_01 ->idade;

$pessoa_02 = new Pessoa();

$pessoa_02 ->nome = "\nPatini";
$pessoa_02 ->idade = 23;

echo "$pessoa_02 ->nome\n";
echo $pessoa_02 ->idade;

?>