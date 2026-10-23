<?php
/*
 * CAÇA AO ERRO — Loja Jovem
 *
 * Este código tem 8 ERROS:
 *   - SINTAXE: o PHP nem roda e mostra uma mensagem de erro.
 *   - LÓGICA: o PHP roda, mas a conta sai errada.
 *
 * Corrija até a saída ficar EXATAMENTE assim:
 *
 *   Tênis: 1 x R$ 250 = R$ 250
 *   Fone Bluetooth: 2 x R$ 80 = R$ 160
 *   Camiseta: 3 x R$ 50 = R$ 150
 *   Total: R$ 560
 *   Desconto de 10%: R$ 56
 *   Total com desconto: R$ 504
 *   Celular de R$ 1000 em 5 vezes com juros de 2% ao mês
 *   Juros: R$ 100
 *   Total a pagar: R$ 1100
 *   Parcela: R$ 220
 */

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;
}

class Parcelamento
{
    public $valor;
    public $taxa;   // em % ao mês
    public $meses;
}

$p1 = new Produto();
$p1->nome = "Tênis";
$p1->preco = 250;
$p1->quantidade = 1;

$p2 = new Produto();
$p2->nome = "Fone Bluetooth";
$p2->preco = 80;
$p2->quantidade = 2;

$p3 = new Produto();
$p3->nome = "Camiseta";
$p3->preco = 50;
$p3->quantidade = 3;

$sub1 = $p1->preco * $p1->quantidade;
$sub2 = $p2->preco * $p2->quantidade;
$sub3 = $p3->preco * $p3->quantidade;

$total = $sub1 + $sub2 + $sub3;
$desconto = $total * 0.1;
$totalComDesconto = $total - $desconto;

echo "$p1->nome: $p1->quantidade x R$ $p1->preco = R$ $sub1 <br>";
echo "$p2->nome: $p2->quantidade x R$ $p2->preco = R$ $sub2 <br>";
echo "$p3->nome: $p3->quantidade x R$ $p3->preco = R$ $sub3 <br>";
echo "Total: R$ $total <br>";
echo "Desconto de 10%: R$ $desconto <br>";
echo "Total com desconto: R$ $totalComDesconto <br>";

$c = new Parcelamento();
$c->valor = 1000;
$c->taxa = 2;
$c->meses = 5;

$juros = $c->valor * ($c->taxa/100 ) * $c->meses;
$totalPagar = $c->valor + $juros;
$parcela = $totalPagar / $c->meses;

echo "Celular de R$ $c->valor em $c->meses vezes com juros de $c->taxa% ao mês <br>";
echo "Juros: R$ $juros <br>";
echo "Total a pagar: R$ $totalPagar <br>";
echo "Parcela: R$ $parcela <br>";