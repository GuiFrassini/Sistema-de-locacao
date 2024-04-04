<?php

require_once ('../Entidades/Locador.php');
require_once ('../Entidades/Anuncio.php');
require_once ('../Entidades/Categoria.php');
require_once ('../Entidades/Endereco.php');
require_once ('../Entidades/Status.php');

function TesteAnuncio()
{
    $status = Status::DisponivelParaLocacao();

    $endereco =  new Endereco(1,4106902,'81293-123',223,'Sitio Cercado');

    $enderecoLocal = new Endereco(2,4106902,80220-202,889,'Água Verde');

    $locador = new Locador(22, 'Jóse Almeida Teste', 'almeidalocacoes@gmail.com', '41 4002-8933', '12123844221', '12345678911', $endereco);

    $categoria = new Categoria(1,'Infantil','Categoria destinada para crianças menores de 10 anos.');

    $anuncio = new Anuncio(1,'Salão Infaltil', $categoria, $enderecoLocal, 80,'Salão com espaço kids e fliperama para sua festa temática.',
                                $locador,700.00, '21/10/2024',$status);

    echo "-------Descrição do Anuncio---------". "\n". "\n";
    echo "          ". $anuncio->getNome(). "\n". "\n";
    echo "Descrição: ". $anuncio->getDescricao(). "\n";;
    echo "Categoria: ". $anuncio->getCategoria()."\n";
    echo "Endereço: " . $anuncio->getEndereco()."\n";
    echo "Capacidade: " . $anuncio->getCapacidade()." Pessoas". "\n";
    echo "Nome do locador: " . $anuncio->getLocador()."\n";
    echo "Valor: R$". $anuncio->getValor()."\n";
    echo "Dia desejado para locação: ".$anuncio->getAgenda()."\n";
    echo "Status: ". $anuncio->getStatus()."\n";
}

TesteAnuncio();