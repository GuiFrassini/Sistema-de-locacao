<?php
// conexão da classe Historico com a classe Reservas
require_once ('../Entidades/Locador.php');
require_once ('../Entidades/Anuncio.php');
require_once ('../Entidades/Categoria.php');
require_once ('../Entidades/Endereco.php');
require_once ('../Entidades/Status.php');
require_once ('../Entidades/Adicionais.php');
require_once ('../Entidades/Contrato.php');
require_once ('../Entidades/Usuario.php');
require_once ('../Entidades/Reservas.php');
require_once ('../Entidades/Historico.php');

function TesteHistorico(){

    $status = Status::Reservado;

    $endereco =  new Endereco(1,4106902,'81293-123',223,'Sitio Cercado');

    $enderecoLocal = new Endereco(2,4106902,80220-202,889,'Água Verde');

    $locador = new Locador(22, 'Jóse Almeida Teste', 'almeidalocacoes@gmail.com', '41 4002-8933', '12123844221', '12345678911', $endereco);

    $categoria = new Categoria (1,'Infantil','Categoria destinada para crianças menores de 10 anos.');

    $anuncio = new Anuncio(1,'Salão Infaltil', $categoria, $enderecoLocal, 80,'Salão com espaço kids e fliperama para sua festa temática.',
        $locador,700.00, '21/10/2024',$status);

    $usuario = new Usuario('Ameilia Guarulhos','40028922','ameilia@gmail.com','12/12/1970','123.432.546-65');

    $adicionais = new Adicionais (1, 'salgados', $anuncio, $categoria, '100 salgados', 80.00, 'disponível', $status);

    $contrato = new Contrato (1,$locador, $usuario, $anuncio, $adicionais);

    $reservas = new Reservas (1,'jose alves', $anuncio, '10/04/2024', 200.00, $contrato, 'debito', $status);

    $historico = new Historico (1,"José Alves",$reservas,200.00);

    echo "Histórico das reservas" . "\n". "\n";
    echo "Nome: ". $historico->getNome(). "\n";
    echo "Reservas: ". $historico->getReservas()->getAnuncio()->getDescricao(). "\n";
    echo "Valores das Reservas: ". $historico->getValor(). "\n";

}

TesteHistorico();