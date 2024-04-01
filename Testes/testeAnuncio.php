<?php

require_once('../Entidades/Locador.php');
require_once('../Entidades/Endereco.php');
require_once('../Entidades/anuncio.php');

function TesteAnuncio()
{
    $endereco =  new Endereco('1', 'Curitiba', '81293-123', '223', 'Sitio Cercado');

    $enderecoLocal = new Endereco('1', 'Curitiba', '82341-187', '888', 'Capão Raso');

    $locador = new Locador('22', 'Jóse Almeida Teste', 'almeidalocações@gmail.com', '41 4002-8933', '12123844221', '12345678911', $endereco);

//teste git no ubuntu

}

TesteAnuncio();
