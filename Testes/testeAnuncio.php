<?php

require_once('../Entidades/Locador.php');
require_once('../Entidades/Endereco.php');
require_once('../Entidades/anuncio.php');
require_once('../Entidades/Categoria.php');

function TesteAnuncio()
{
    $endereco =  new Endereco('1', 'Curitiba', '81293-123', '223', 'Sitio Cercado');

    $enderecoLocal = new Endereco('1', 'Curitiba', '82341-187', '888', 'Capão Raso');

    $locador = new Locador('22', 'Jóse Almeida Teste', 'almeidalocações@gmail.com', '41 4002-8933', '12123844221', '12345678911', $endereco);

    $categoria = new Categoria('Infantil','Categoria destinada a locação de festas infatis');

    $anuncio = new anuncios('1','Salão de festas infantil',$categoria->getNome(),$enderecoLocal,'80','Salão de festas testando',
                            $locador->getNome(),'700,00','21/11/2024','Disponivel');

    echo "Informações do Anuncio" . "\n" ."\n";
    echo "Nome:" . $anuncio->getNome() . "\n";
    echo "Categoria: " . $anuncio->getCategoria() ."\n";
    echo "Local: " . $enderecoLocal->getCep() . ", " .  $enderecoLocal->getBairro() . ", " . $enderecoLocal->getNumero() . ", " . $enderecoLocal->getCidade() . "\n";
    echo "Capacidade: ". $anuncio->getCapacidade() . " Pessoas" . "\n";
    echo "Descrição : " . $anuncio->getDescricao() ."\n";
    echo "Nome do Locador:" . $anuncio->getLocador() . "\n";
    echo "Valor : R$" . $anuncio->getValor() . "\n";
    echo "Data a ser locada : " . $anuncio->getAgenda() . "\n";
    echo "Status :" . $anuncio->getStatus() . "\n";




}

TesteAnuncio();
