<?php

class Adicionais
{
    private $id;
    private $nome;
    private Anuncio $anuncio;
    private Categoria $categoria;
    private $descricao;
    private $valor;
    private $disponibilidade;
    private Status $status;

    public function __construct( int $id,string $nome,Anuncio $anuncio, Categoria $categoria,string $descricao, int $valor,string $disponibilidade, Status $status)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->anuncio = $anuncio;
        $this->categoria = $categoria;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->disponibilidade = $disponibilidade;
        $this->status = $status;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getAnuncio(): Anuncio
    {
        return $this->anuncio;
    }

    public function getCategoria(): Categoria
    {
        return $this->categoria;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getValor(): int
    {
        return $this->valor;
    }

    public function setValor(int $valor): void
    {
        $this->valor = $valor;
    }

    public function getDisponibilidade(): string
    {
        return $this->disponibilidade;
    }

    public function setDisponibilidade(string $disponibilidade): void
    {
        $this->disponibilidade = $disponibilidade;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }


}