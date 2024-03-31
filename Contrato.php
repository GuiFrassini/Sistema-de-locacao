<?php

class Contrato{
    private $id;
    private $locador;
    private $usuario;
    private $anuncio;
    private $adicionais;

    public function __construct($id, $locador, $usuario, $anuncio, $adicionais){
        $this->id = $id;
        $this->locador = $locador;
        $this->usuario = $usuario;
        $this->anuncio = $anuncio;
        $this->adicionais = $adicionais;

    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getLocador(){
        return $this->locador;
    }
    public function setLocador($locador){
        $this->locador = $locador;
    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getAnuncio(){
        return $this->anuncio;
    }
    public function setAnuncio($anuncio){
        $this->anuncio = $anuncio;
    }

    public function getAdicionais(){
        return $this->adicionais;
    }
    public function setAdicionais($adicionais){
        $this->adicionais = $adicionais;
    }
}
