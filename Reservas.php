<?php

class Reservas{
    private $id;
    private $nome;
    private Anuncio $anuncio;
    private $agenda;
    private $valor;
    private Contrato $contrato;
    private $formaPagamento;
    private Status $status;

    public function __construct(int $id, string $nome, Anuncio $anuncio, string $agenda, int $valor, Contrato $contrato, string $formaPagamento, Status $status){
        $this->id = $id;
        $this->nome = $nome;
        $this->anuncio = $anuncio;
        $this->agenda = $agenda;
        $this->valor = $valor;
        $this->contrato = $contrato;
        $this->formaPagamento = $formaPagamento;
        $this->status = $status;

    }

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }

    public function getNome() :string{
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getAnuncio(): Anuncio {
        return $this->anuncio;
    }
    public function setAnuncio(Anuncio $anuncio){
        $this->anuncio = $anuncio;
    }

    public function getValor(): int{
        return $this->valor;
    }
    public function setValor(int $valor){
        $this->valor = $valor;
    }

    public function getContrato(): Contrato {
        return $this->contrato;
    }
    public function setContrato(Contrato $contrato){
        $this->contrato = $contrato;
    }

    public function getFormaPagamento(): string{
        return $this->formaPagamento;
    }
    public function setFormaPagamento(string $formaPagamento){
        $this->formaPagamento = $formapagamento;
    }

    public function getStatus(): Status {
        return $this->status;
    }
    public function setStatus(Status $status){
        $this->status = $status;
    }
}
