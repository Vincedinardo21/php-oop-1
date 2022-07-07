<?php

class Movie{
    public $nome;
    public $genere;
    public $anno;
    public $durata;
    public $lingua;
    public $limite_eta;
    public $warning = "";

    public function __construct(string $name, string $genre, int $year, int $length, string $language, int $age)
    {
        $this->nome = $name;
        $this->genere = $genre;
        $this->anno = $year;
        $this->durata = $length;
        $this->lingua = $language;
        $this->limite_eta = $age;

        $this->setAge();
    }

    public function setAge(){
        if($this->limite_eta >= 18){
            $this->sconto = "Attenzione, film soggetto a limiti di età";
        }
    }
}