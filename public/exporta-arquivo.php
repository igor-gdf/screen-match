<?php

$filme = [
    "nome"=> $_POST["nome"],
    "anoLancamento"=> $_POST["anoLancamento"],
    "nota"=> $_POST["nota"],
    "genero"=> $_POST["genero"]
];

file_put_contents("filme.json", json_encode($filme));

header('location: /sucesso.php?filme=' . $filme['nome']);
