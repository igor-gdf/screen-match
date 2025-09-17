<?php

require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/modelo/filme.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    'super-heroi'
);
$filme -> avalia(10);
$filme -> avalia(6);
$filme -> avalia(7.8);
$filme -> avalia(8.2);

echo $filme -> nome()."\n";
echo $filme -> genero()."\n";
echo $filme -> anoLancamento()."\n";
echo $filme -> media()."\n";