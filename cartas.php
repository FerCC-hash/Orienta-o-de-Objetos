<?php

class Carta
{
    private $numero;
    private $nome;
    private $dica;

    public function __construct($numero, $nome, $dica = "")
    {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->dica = $dica;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDica()
    {
        return $this->dica;
    }

    public function __toString()
    {
        return $this->numero . " de " . $this->nome;
    }
}

// ---- Criando um baralho (mínimo 7 cartas) ----
$baralho = [
    new Carta(1, "Espadas", "É a menor carta de Espadas"),
    new Carta(2, "Copas", "É a segunda carta de Copas"),
    new Carta(3, "Ouros", "Terceira carta de Ouros"),
    new Carta(4, "Paus", "Quarta carta de Paus"),
    new Carta(5, "Copas", "Quinta carta de copas"),
    new Carta(6, "Ouros", "Sesta carta de ouros"),
    new Carta(7, "Espadas", "Setima carta de espadas"),
];

// ---- Sorteando uma carta aleatória ----
$cartaSecreta = $baralho[array_rand($baralho)];

// ---- Sistema de pontuação ----
$pontos = 100;
$tentativas = 0;

echo "=== JOGO DE ADIVINHAÇÃO DE CARTAS ===\n";

do {
    echo "\nCartas disponíveis:\n";
    foreach ($baralho as $carta) {
        echo "- " . $carta . "\n";
    }

    echo "\nDica: " . $cartaSecreta->getDica() . "\n";
    $palpite = readline("Digite o número da carta que você acha correta (ou 'sair' para desistir): ");

    if (strtolower($palpite) === "sair") {
        echo "Você desistiu! A carta era: " . $cartaSecreta . "\n";
        echo "Caso queira veja esse video sobra a historia das cartas: https://youtu.be/HilKk5doia0?si=uWubSNljqZy-1K6N";
        exit;
    }

    $tentativas++;

    if ($palpite == $cartaSecreta->getNumero()) {
        echo "\n Parabéns! Você acertou a carta: " . $cartaSecreta . "\n";
        echo "Tentativas: $tentativas\n";
        echo "Pontuação final: " . ($pontos - ($tentativas - 1) * 10) . "\n";
        echo "Caso queira veja esse video sobra a historia das cartas: https://youtu.be/HilKk5doia0?si=uWubSNljqZy-1K6N";
        break;
    } else {
        echo " Errado! Tente novamente.\n";
        echo "Caso queira veja esse video sobra a historia das cartas: https://youtu.be/HilKk5doia0?si=uWubSNljqZy-1K6N";
    }

} while (true);