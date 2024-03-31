<?php

require_once ('../Entidades/Locador.php');
require_once ('../Entidades/Endereco.php');

function TesteLocador()
{
    $endereco =  new Endereco('1','Curitiba','81293-123','223','Sitio Cercado');


    $locador = new Locador('22','Jóse','Email','4002-8933','12123844221','12345678911',$endereco);

    echo "Bairro:  " . $endereco->getBairro() . "\n";
    echo "Nome do Locador:  " . $locador->getNome() . "\n";



}

TesteLocador();