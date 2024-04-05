<?php

class Categoria
{
    private int $id;
    private string $nome;
    private string $descricao;

    public function __construct(int $id,string $nome, string $descricao)
    {
        $this->id= $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(): void
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

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }
}