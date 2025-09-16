<?php

$caminhoarquivo = __DIR__ ."/filme.json";

$conteudoArquivo = file_get_contents($caminhoarquivo);

$filme = json_decode($conteudoArquivo, true);


