<?php

class Endereco
{
    private $id;
    private $cidade;
    private $cep;
    private $numero;
    private $bairro;

    public function __construct(int $id, int $cidade, string $cep, int $numero, string $bairro)
    {
        $this->id = $id;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->numero = $numero;
        $this->bairro = $bairro;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCidade(): int
    {
        return $this->cidade;
    }

    public function setCidade(int $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $cep): void
    {
        $this->cep = $cep;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

}