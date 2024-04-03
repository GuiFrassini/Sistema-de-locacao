<?php

class Historico{
    private $id;
    private $nome;
    private Reservas $reservas;
    private $valor;

    public function __construct(int $id, string $nome, Reservas $reservas, int $valor){
        $this->id = $id;
        $this->nome = $nome;
        $this->reservas = $reservas;
        $this->valor = $valor;
    }

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }

    public function getNome(): string{
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getReservas(): Reservas{
        return $this->reservas;
    }

    public function getValor(): int{
        return $this->valor;
    }
    public function setValor(int $valor){
        $this->valor = $valor;
    }

}