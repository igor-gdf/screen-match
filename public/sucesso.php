<?php

$conteudoArquivoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoArquivoJson, true);
?>

    <h1><?= $filme['nome']; ?></h1>
    <dl>
        <dt>Ano de lançamento</dt>
        <dd><?= $filme['anoLancamento']; ?></dd>

        <dt>Nota</dt>
        <dd><?= $filme['nota']; ?></dd>

        <dt>Gênero</dt>
        <dd><?= $filme['genero']; ?></dd>
    </dl>

