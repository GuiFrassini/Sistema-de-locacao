<?php

class Endereco
{
    private $id;
    private $cidade;
    private $cidade;
    private $cep;
    private $numero;
    private $bairro;

    public function __construct($id, $cidade, $cep, $numero, $bairro)
    {
        $this->id = $id;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->numero = $numero;
        $this->bairro = $bairro;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getCidade()
    {
        return $this->cidade;
    }


    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }


    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep): void
    {
        $this->cep = $cep;
    }


    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro): void
    {
        $this->bairro = $bairro;
    }


}