<?php

class Animal {
    public $especie;
    public $numPatas;
    public $tipoPele;
    public $som;
    public $movimento;

    public function __construct($especie, $numPatas, $tipoPele, $som, $movimento) {
        $this->especie = $especie;
        $this->numPatas = $numPatas;
        $this->tipoPele = $tipoPele;
        $this->som = $som;
        $this->movimento = $movimento;
    }

    public function emitirSom() {
        echo "O {$this->especie} faz: {$this->som}\n";
    }

    public function mover() {
        echo "O {$this->especie} se move: {$this->movimento}\n";
    }

    public function exibirInfo() {
        echo "Espécie: {$this->especie}\n";
        echo "Número de patas: {$this->numPatas}\n";
        echo "Tipo de pele: {$this->tipoPele}\n";
        $this->emitirSom();
        $this->mover();
        echo "--------------------------\n";
    }
}

$ovelha = new Animal("Ovelha", 4, "pelos", "bééééééé", "andando");
$cavalo = new Animal("Cavalo", 4, "pelos", "relincha", "andando");
$vaca = new Animal("Vaca", 4, "pelos/couro", "muuu", "andando");
$galinha = new Animal("Galinha", 2, "penas", "cócóricó", "andando e consegue planar");
$pato = new Animal("Pato", 2, "penas", "quan quan quan", "andando, nadando e voando");

$ovelha->exibirInfo();
$cavalo->exibirInfo();
$vaca->exibirInfo();
$galinha->exibirInfo();
$pato->exibirInfo();