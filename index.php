<?php

require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/modelo/filme.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme();
$filme -> defineAnoLancamento(2021);
$filme -> defineNome("Thor - Raghnarok");
$filme -> defineGenero("ação");
$filme -> avalia(10);
$filme -> avalia(6);
$filme -> avalia(7.8);
$filme -> avalia(8.2);

echo $filme -> media()."\n";
echo $filme -> anoLancamento()."\n";
