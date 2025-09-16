<?php

require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/modelo/filme.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

if ($quantidadeDeNotas > 0) {
    $notaFilme = array_sum($notas) / $quantidadeDeNotas;
} else {
    $notaFilme = 0; // Ou algum valor padrão, ou mensagem de erro
    echo "Nenhuma nota foi informada. Não é possível calcular a média.\n";
}

$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criarFilme(
    nome: "Thor: ragnarok",
    anoLancamento: 2021,
    nota: 7.8,
    genero: "super-heroi"
);

echo $filme->anoLancamento."\n";

if (!empty($notas)) {
    $menorNota = min($notas);
    echo $menorNota . "\n";
} else {
    echo "Nenhuma nota informada para encontrar a menor nota.\n";
}

$filmeComoStringJason = json_encode($filme);

file_get_contents(__DIR__ . "/filme.json", $filmeComoStringJason);