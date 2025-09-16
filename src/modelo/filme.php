<?php

class Filme {
    private string $nome = "nome padrão";
    private int $anoLancamento = 2024;
    private string $genero = "ação";
    private float $media = 10;
    private array $notas = [];

    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }
    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / count($this->notas);
    }
    public function nome():string {
        return $this -> nome;
    }
    public function defineNome(string $nome): void {
        $this -> nome = $nome;
    }
    public function anoLancamento():int {
        return $this -> anoLancamento;
    }
    public function defineAnoLancamento(int $anoLancamento): void {
        $this -> anoLancamento = $anoLancamento;
    }
    public function genero(): string
    {
        return $this->genero;
    }

    public function defineGenero(string $genero): void
    {
        $this-> genero = $genero;
    }
};