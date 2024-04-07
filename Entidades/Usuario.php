<?php

class Usuario
{
    private $nome;
    private $telefone;
    private $email;
    private $datanasc;
    private $cpf;

    public function __construct(string $nome,string $telefone,string $email,string $datanasc,string $cpf)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->datanasc = $datanasc;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getDatanasc(): string
    {
        return $this->datanasc;
    }

    public function setDatanasc(string $datanasc): void
    {
        $this->datanasc = $datanasc;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

}
