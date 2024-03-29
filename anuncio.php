<?php

class anuncios
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

    public function __construct($id,$nome,$categoria,$endereco,$capacidade,$descricao,$locador,$valor,$agenda,$status)
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
    public function getCidade()
    {
        return $this->categoria;
    }
    public function setCidade($categoria)
    {
        $this->categoria = $categoria;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getCapacidade()
    {
        return $this->capacidade;
    }
    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}