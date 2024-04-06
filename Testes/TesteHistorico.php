<?php
// conexão da classe Historico com a classe Reservas
require_once ('../Entidades/Historico.php');
require_once ('../Entidades/Locador.php');
require_once ('../Entidades/Anuncio.php');
require_once ('../Entidades/Categoria.php');
require_once ('../Entidades/Endereco.php');
require_once ('../Entidades/Status.php');
require_once ('../Entidades/Adicionais.php');
require_once ('../Entidades/Contrato.php');

function TesteHistorico(){
    $status = Status::Reservado;

    $endereco =  new Endereco(1,4106902,'81293-123',223,'Sitio Cercado');
    
    $enderecoLocal = new Endereco(2,4106902,80220-202,889,'Água Verde');
    
    $locador = new Locador(22, 'Jóse Almeida Teste', 'almeidalocacoes@gmail.com', '41 4002-8933', '12123844221', '12345678911', $endereco);
    
    $anuncio = new Anuncio(1,'Salão Infaltil', $categoria, $enderecoLocal, 80,'Salão com espaço kids e fliperama para sua festa temática.',
    $locador,700.00, '21/10/2024',$status);
    
    $categoria = new Categoria (1,'Infantil','Categoria destinada para crianças menores de 10 anos.');
    
    $adicionais = new Adicionais (1, 'salgados', $anuncio, $categoria, '100 salgados', 80.00, 'disponível', $status);
    
    $contrato = new Contrato (1,'jose almeida teste', $usuario, $anuncio, $adicionais);

    $reservas = new Reservas (1,'jose alves', $anuncio, '10/04/2024', 200.00, $contrato, 'debito', $status);

    $historico = new Historico (1, $reservas, 200.00);

    echo "Histórico das reservas" . "\n". "\n";
    echo "Nome: ". $historico->getNome(). "\n";
    echo "Reservas: ". $historico->getReservas(). "\n";
    echo "Valores das Reservas: ". $historico->getValor(). "\n";
}