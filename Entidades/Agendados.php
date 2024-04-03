<?php

class Agendados
{
    private $id;
    public $nome;
    public $reservas;
    public Contrato $contrato;
    public function __construct(int $id, string $nome, string $reservas, Contrato $contrato)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->reservas = $reservas;
        $this->contrato = $contrato;
    }
    public function getId() : int
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNome() : string
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getReservas() : string
    {
        return $this->reservas;
    }
    public function setReservas($reservas)
    {
        $this->reservas = $reservas;
    }
    public function getContrato() : Contrato
    {
        return $this->contrato;
    }
}
