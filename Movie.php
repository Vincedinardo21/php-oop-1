<?php

class Movie{
    public $nome;
    public $genere;
    public $anno;
    public $durata;
    public $lingua;

    public function __construct(string $name, string $genre, int $year, int $length, string $language)
    {
        $this->nome = $name;
        $this->genere = $genre;
        $this->anno = $year;
        $this->durata = $length;
        $this->lingua = $language;
    }
}