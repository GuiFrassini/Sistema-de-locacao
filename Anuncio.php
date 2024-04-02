<?php

class Anuncio
{
    private $id;
    public $nome;
    public Categoria $categoria;
    public Endereco $endereco;
    public $capacidade;
    public $descricao;
    public Locador $locador;
    public $valor;
    public $agenda;
    public Status $status;

    public function __construct(int $id, string $nome, Categoria $categoria, Endereco $endereco, int $capacidade, string $descricao, Locador $locador, int $valor, string $agenda, Status $status)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->endereco = $endereco;
        $this->capacidade = $capacidade;
        $this->descricao = $descricao;
        $this->locador = $locador;
        $this->valor = $valor;
        $this->agenda = $agenda;
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

    public function getCategoria(): Categoria
    {
        return $this->categoria;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }


    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function setCapacidade(int $capacidade): void
    {
        $this->capacidade = $capacidade;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getLocador(): Locador
    {
        return $this->locador;
    }

    public function getValor(): int
    {
        return $this->valor;
    }

    public function setValor(int $valor): void
    {
        $this->valor = $valor;
    }

    public function getAgenda(): string
    {
        return $this->agenda;
    }

    public function setAgenda(string $agenda): void
    {
        $this->agenda = $agenda;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }


}
