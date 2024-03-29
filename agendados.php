<?php

class agendados
{
    private $id;
    public $nome;
    public $reservas;
    public $contrato;
    public function __construct($id, $nome, $reservas, $contrato)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->reservas = $reservas;
        $this->contrato = $contrato;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getReservas()
    {
        return $this->reservas;
    }
    public function setReservas($reservas)
    {
        $this->reservas = $reservas;
    }
    public function getContrato()
    {
        return $this->contrato;
    }
}