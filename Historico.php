<?php

class Historico{
    private $id;
    private $nome;
    private $reservas;
    private $valor;

    public function __construct($id, $nome, $reservas, $valor){
        $this->id = $id;
        $this->nome = $nome;
        $this->reservas = $reservas;
        $this->valor = $valor;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        $this->nome = $nome;
    }

    public function getReservas(){
        return $this->reservas;
    }
    public function setReservas(){
        $this->reservas = $reservas;
    }

    public function getValor(){
        return $this->valor;
    }
    public function setValor(){
        $this->valor = $valor;
    }

}