<?php

class Contrato{
    private $id;
    private Locador $locador;
    private Usuario $usuario;
    private Anuncio $anuncio;
    private Adicionais $adicionais;

    public function __construct(int $id, Locador $locador, Usuario $usuario, Anuncio $anuncio, Adicionais $adicionais){
        $this->id = $id;
        $this->locador = $locador;
        $this->usuario = $usuario;
        $this->anuncio = $anuncio;
        $this->adicionais = $adicionais;

    }

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }

    public function getLocador(): Locador{
        return $this->locador;
    }

    public function getUsuario(): Usuario {
        return $this->usuario;
    }

    public function getAnuncio(): Anuncio{
        return $this->anuncio;
    }

    public function getAdicionais(): Adicionais{
        return $this->adicionais;
    }
}
