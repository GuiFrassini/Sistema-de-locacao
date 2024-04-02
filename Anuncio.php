<?php

class Anuncio
{
    private $id;
    public $nome;
    public $categoria;
    public $endereco;
    public $capacidade;
    public $descricao;
    public $locador;
    public $valor;
    public $agenda;
    public $status;

    public function __construct(int $id, string $nome, string $categoria, int $endereco, int $capacidade, string $descricao, string $locador, int $valor, string $agenda, string $status)
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

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function getEndereco(): int
    {
        return $this->endereco;
    }

    public function setEndereco(int $endereco): void
    {
        $this->endereco = $endereco;
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

    public function getLocador(): string
    {
        return $this->locador;
    }

    public function setLocador(string $locador): void
    {
        $this->locador = $locador;
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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }


}
